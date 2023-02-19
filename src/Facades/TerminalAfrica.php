<?php

namespace Cybernerdie\LaravelTerminalAfrica\Facades;

use Cybernerdie\LaravelTerminalAfrica\Contracts\TerminalAfricaContract;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Cybernerdie\LaravelTerminalAfrica\Contracts\TerminalAfricaContract
 */
class TerminalAfrica extends Facade
{
    protected static function getFacadeAccessor()
    {
        return TerminalAfricaContract::class;
    }
}
