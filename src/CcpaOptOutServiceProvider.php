<?php

namespace JeffersonGoncalves\Filament\CcpaOptOut;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class CcpaOptOutServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-ccpa-opt-out';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
