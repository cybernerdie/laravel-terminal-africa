<?php

namespace Cybernerdie\LaravelTerminalAfrica\Helpers;

use Cybernerdie\LaravelTerminalAfrica\Contracts\TerminalAfricaContract;

if (! function_exists('terminal_africa')) {
    function terminal_africa(): TerminalAfricaContract
    {
        return app()->make(TerminalAfricaContract::class);
    }
}
