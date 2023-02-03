<?php

namespace Cybernerdie\LaravelTerminalAfrica\Commands;

use Illuminate\Console\Command;

class LaravelTerminalAfricaCommand extends Command
{
    public $signature = 'laravel-terminal-africa';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
