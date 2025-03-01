<?php

namespace LukasMu\Rickroll;

use Illuminate\Support\ServiceProvider;

class RickrollServiceProvider extends ServiceProvider
{
    /**
     * Register the package services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/rickroll.php', 'rickroll');
    }

    /**
     * Bootstrap the package services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/rickroll.php' => config_path('rickroll.php'),
            ], 'config');
        }
    }
}
