<?php

use Illuminate\Console\Events\CommandFinished;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

use App\Console\Commands\StandardizeCommand;

class StandardServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register()
    {
        $this->commands(
            [
                StandardizeCommand::class,
            ]
        );
    }

    public function provides()
    {
        return [
            StandardizeCommand::class,
        ];
    }
}