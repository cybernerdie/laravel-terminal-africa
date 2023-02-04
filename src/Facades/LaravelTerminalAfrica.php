<?php

namespace Cybernerdie\LaravelTerminalAfrica\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cybernerdie\LaravelTerminalAfrica\LaravelTerminalAfrica
 */ 
class LaravelTerminalAfrica extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Cybernerdie\LaravelTerminalAfrica\LaravelTerminalAfrica::class;
    }
}
