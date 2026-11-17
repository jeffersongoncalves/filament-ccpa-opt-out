<?php

namespace JeffersonGoncalves\Filament\CcpaOptOut\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\CcpaOptOut\CcpaOptOutPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CcpaOptOutPlugin::make(),
            ]);
    }
}
