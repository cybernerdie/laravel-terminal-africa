<?php

namespace Cybernerdie\LaravelTerminalAfrica\Tests;

use Cybernerdie\LaravelTerminalAfrica\LaravelTerminalAfricaServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

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
