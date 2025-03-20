<?php

namespace Felipepkgs\Standard;

use Illuminate\Support\ServiceProvider;

class StandardServiceProvider extends ServiceProvider
{
    public function register()
    {
         // Register commands only for the console
         if ($this->app->runningInConsole()) {
            $this->commands([
                \Felipepkgs\Standard\Console\Commands\StandardizeCommand::class,
            ]);
        }
    }

    public function boot()
    {
        // Publish config, migrations, views, etc.
    }
}
