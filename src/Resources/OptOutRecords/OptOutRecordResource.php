<?php

namespace JeffersonGoncalves\Filament\CcpaOptOut\Resources\OptOutRecords;

use BackedEnum;
use Filament\Actions\ViewAction;
use Filament\Infolists\Components\KeyValueEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Panel;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use JeffersonGoncalves\CcpaOptOut\Enums\OptOutAction;
use JeffersonGoncalves\CcpaOptOut\Enums\OptOutRight;
use JeffersonGoncalves\CcpaOptOut\Models\OptOutRecord;
use JeffersonGoncalves\Filament\CcpaOptOut\CcpaOptOutPlugin;
use JeffersonGoncalves\Filament\CcpaOptOut\Resources\OptOutRecords\Pages\ListOptOutRecords;
use JeffersonGoncalves\Filament\CcpaOptOut\Resources\OptOutRecords\Pages\ViewOptOutRecord;
use JeffersonGoncalves\Filament\CcpaOptOut\Support\Labels;

/**
 * Read-only: the ledger is append-only, consents are recorded by the application, never edited here.
 */
class OptOutRecordResource extends Resource
{
    protected static ?string $model = OptOutRecord::class;

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make()
                    ->columns(2)
                    ->schema([
                        TextEntry::make('subject')
                            ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.fields.subject'))
                            ->state(fn (OptOutRecord $record): string => Labels::subject($record)),
                        TextEntry::make('right')
                            ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.fields.right'))
                            ->formatStateUsing(fn (BackedEnum $state): string => Labels::right($state->value))
                            ->badge(),
                        TextEntry::make('action')
                            ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.fields.action'))
                            ->formatStateUsing(fn (BackedEnum $state): string => Labels::action($state->value))
                            ->badge()
                            ->color(fn (BackedEnum $state): string => Labels::actionColor($state->value)),
                        TextEntry::make('created_at')
                            ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.fields.created_at'))
                            ->dateTime(),
                        TextEntry::make('source')
                            ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.fields.source'))
                            ->placeholder('-'),
                        TextEntry::make('ip_address')
                            ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.fields.ip_address'))
                            ->placeholder('-'),
                        TextEntry::make('user_agent')
                            ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.fields.user_agent'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                        KeyValueEntry::make('metadata')
                            ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.fields.metadata'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.fields.created_at'))
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('subject')
                    ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.fields.subject'))
                    ->state(fn (OptOutRecord $record): string => Labels::subject($record)),
                TextColumn::make('right')
                    ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.fields.right'))
                    ->formatStateUsing(fn (BackedEnum $state): string => Labels::right($state->value))
                    ->badge(),
                TextColumn::make('action')
                    ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.fields.action'))
                    ->formatStateUsing(fn (BackedEnum $state): string => Labels::action($state->value))
                    ->badge()
                    ->color(fn (BackedEnum $state): string => Labels::actionColor($state->value)),
                TextColumn::make('source')
                    ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.fields.source'))
                    ->formatStateUsing(fn (string $state): string => Labels::source($state))
                    ->placeholder('-'),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                SelectFilter::make('right')
                    ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.fields.right'))
                    ->options(collect(OptOutRight::cases())->mapWithKeys(fn (OptOutRight $right): array => [$right->value => Labels::right($right->value)])->all()),
                SelectFilter::make('action')
                    ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.fields.action'))
                    ->options(collect(OptOutAction::cases())->mapWithKeys(fn (OptOutAction $action): array => [$action->value => Labels::action($action->value)])->all()),
                TernaryFilter::make('visitors')
                    ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.filters.visitors'))
                    ->queries(
                        true: fn (Builder $query): Builder => $query->whereNotNull('anonymous_id'),
                        false: fn (Builder $query): Builder => $query->whereNull('anonymous_id'),
                    ),
                TernaryFilter::make('gpc')
                    ->label(__('filament-ccpa-opt-out::filament-ccpa-opt-out.filters.gpc'))
                    ->queries(
                        true: fn (Builder $query): Builder => $query->where('source', 'gpc'),
                        false: fn (Builder $query): Builder => $query->where(fn (Builder $q) => $q->whereNull('source')->orWhere('source', '!=', 'gpc')),
                    ),
            ])
            ->recordActions([
                ViewAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOptOutRecords::route('/'),
            'view' => ViewOptOutRecord::route('/{record}'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getModelLabel(): string
    {
        return __('filament-ccpa-opt-out::filament-ccpa-opt-out.resource.label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament-ccpa-opt-out::filament-ccpa-opt-out.resource.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return CcpaOptOutPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return CcpaOptOutPlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): string|BackedEnum|null
    {
        return CcpaOptOutPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(?Panel $panel = null): string
    {
        return CcpaOptOutPlugin::get()->getSlug();
    }
}
