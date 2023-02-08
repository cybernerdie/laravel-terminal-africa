<?php

namespace Cybernerdie\LaravelTerminalAfrica;


use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Cybernerdie\LaravelTerminalAfrica\Facades\TerminalAfricaFacade;
use Cybernerdie\LaravelTerminalAfrica\TerminalAfrica;


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
    }
}
