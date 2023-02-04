<?php

namespace Cybernerdie\LaravelTerminalAfrica;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Cybernerdie\LaravelTerminalAfrica\Facades\LaravelTerminalAfrica as TerminalAfricaFacade;
use Cybernerdie\LaravelTerminalAfrica\LaravelTerminalAfrica as TerminalAfrica;
use Cybernerdie\LaravelTerminalAfrica\ApiTraits\CustomersApiTrait;
use Cybernerdie\LaravelTerminalAfrica\ApiTraits\RatesApiTrait;
use Cybernerdie\LaravelTerminalAfrica\ApiTraits\ShipmentsApiTrait;

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
        $this->app->singleton(TerminalAfricaFacade::class, function ($app) {
            return new TerminalAfrica(
                new ShipmentsApiTrait(),
                new RatesApiTrait(),
                new CustomersApiTrait()
            );
        });

    }
}
