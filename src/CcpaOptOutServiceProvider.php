<?php

namespace JeffersonGoncalves\Filament\CcpaOptOut;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CcpaOptOutServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-ccpa-opt-out')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
