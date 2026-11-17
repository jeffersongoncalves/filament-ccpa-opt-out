<?php

use JeffersonGoncalves\CcpaOptOut\Enums\OptOutRight;
use JeffersonGoncalves\CcpaOptOut\Facades\CcpaOptOut;
use JeffersonGoncalves\Filament\CcpaOptOut\CcpaOptOutPlugin;
use JeffersonGoncalves\Filament\CcpaOptOut\Resources\OptOutRecords\OptOutRecordResource;
use JeffersonGoncalves\Filament\CcpaOptOut\Resources\OptOutRecords\Pages\ListOptOutRecords;
use JeffersonGoncalves\Filament\CcpaOptOut\Resources\OptOutRecords\Pages\ViewOptOutRecord;
use JeffersonGoncalves\Filament\CcpaOptOut\Tests\Fixtures\TestUser;
use Livewire\Livewire;

beforeEach(function () {
    $this->user = TestUser::create(['name' => 'Maria', 'email' => 'maria@example.com']);

    $this->actingAs($this->user);
});

it('lists users and visitors opt-outs', function () {
    $user = CcpaOptOut::optOut($this->user, OptOutRight::SaleSharing, source: 'form');
    $visitor = CcpaOptOut::optOut('3f2b9c1e-visitor', OptOutRight::SaleSharing, source: 'gpc');

    Livewire::test(ListOptOutRecords::class)
        ->assertSuccessful()
        ->assertCanSeeTableRecords([$user, $visitor])
        ->assertSee('TestUser #'.$this->user->getKey())
        ->assertSee('Visitor 3f2b9c1e...')
        ->assertSee('Do Not Sell or Share')
        ->assertSee('Global Privacy Control signal')
        ->assertSee('Opted out');
});

it('filters by right, choice, visitors and GPC', function () {
    $sensitive = CcpaOptOut::optOut($this->user, OptOutRight::LimitSensitive, source: 'form');
    $gpc = CcpaOptOut::optOut('visitor-1', OptOutRight::SaleSharing, source: 'gpc');
    $optIn = CcpaOptOut::optIn($this->user, OptOutRight::SaleSharing, source: 'form');

    Livewire::test(ListOptOutRecords::class)
        ->filterTable('right', 'limit_sensitive')
        ->assertCanSeeTableRecords([$sensitive])
        ->assertCanNotSeeTableRecords([$gpc, $optIn]);

    Livewire::test(ListOptOutRecords::class)
        ->filterTable('action', 'opted_in')
        ->assertCanSeeTableRecords([$optIn])
        ->assertCanNotSeeTableRecords([$sensitive, $gpc]);

    Livewire::test(ListOptOutRecords::class)
        ->filterTable('visitors', true)
        ->assertCanSeeTableRecords([$gpc])
        ->assertCanNotSeeTableRecords([$sensitive, $optIn]);

    Livewire::test(ListOptOutRecords::class)
        ->filterTable('gpc', true)
        ->assertCanSeeTableRecords([$gpc])
        ->assertCanNotSeeTableRecords([$sensitive, $optIn]);
});

it('shows the proof of the request', function () {
    $record = CcpaOptOut::optOut($this->user, OptOutRight::SaleSharing, source: 'form', metadata: ['page' => 'privacy-choices']);

    Livewire::test(ViewOptOutRecord::class, ['record' => $record->getKey()])
        ->assertSuccessful()
        ->assertSee('Do Not Sell or Share')
        ->assertSee('Form')
        ->assertSee('privacy-choices');
});

it('is read-only and applies the fluent plugin options', function () {
    CcpaOptOutPlugin::get()->navigationGroup('CCPA')->slug('privacy-choices');

    expect(OptOutRecordResource::canCreate())->toBeFalse()
        ->and(OptOutRecordResource::getPages())->toHaveKeys(['index', 'view'])->not->toHaveKey('edit')
        ->and(OptOutRecordResource::getNavigationGroup())->toBe('CCPA')
        ->and(OptOutRecordResource::getSlug())->toBe('privacy-choices');
});
