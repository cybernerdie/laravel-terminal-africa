<?php

namespace Cybernerdie\LaravelTerminalAfrica\Facades;

use Cybernerdie\LaravelTerminalAfrica\TerminalAfrica;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Cybernerdie\LaravelTerminalAfrica\TerminalAfrica
 */
class TerminalAfricaFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return TerminalAfrica::class;
    }
}
