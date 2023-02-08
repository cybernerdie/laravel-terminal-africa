<?php

namespace Cybernerdie\LaravelTerminalAfrica\Helpers;

use Cybernerdie\LaravelTerminalAfrica\TerminalAfrica;

if (! function_exists('terminal_africa')) {
    function terminal_africa(): TerminalAfrica
    {
        return app()->make(TerminalAfrica::class);
    }
}


