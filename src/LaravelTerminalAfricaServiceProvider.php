<?php

namespace Cybernerdie\LaravelTerminalAfrica;

use Cybernerdie\LaravelTerminalAfrica\Contracts\TerminalAfricaContract;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelTerminalAfricaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-terminal-africa')
            ->hasConfigFile();
    }

    public function packageRegistered()
    {
        $this->app->bind(TerminalAfricaContract::class, TerminalAfricaService::class);
    }
}
