<?php

namespace LukasMu\Rickroll;

use Illuminate\Support\ServiceProvider;

class RickrollServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Load the RickRoll routes (all the magic happens in the routes.php file)
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        // Make sure that config can be published
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/rickroll.php' => config_path('rickroll.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/rickroll.php', 'rickroll');
    }
}
