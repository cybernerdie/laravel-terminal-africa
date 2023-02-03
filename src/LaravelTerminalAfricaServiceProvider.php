<?php

namespace Cybernerdie\LaravelTerminalAfrica;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Cybernerdie\LaravelTerminalAfrica\Commands\LaravelTerminalAfricaCommand;

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
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-terminal-africa_table')
            ->hasCommand(LaravelTerminalAfricaCommand::class);
    }
}
