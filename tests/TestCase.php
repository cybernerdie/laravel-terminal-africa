<?php

namespace Cybernerdie\LaravelTerminalAfrica\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Cybernerdie\LaravelTerminalAfrica\LaravelTerminalAfricaServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelTerminalAfricaServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
    }
}
