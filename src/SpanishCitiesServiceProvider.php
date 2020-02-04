<?php

namespace Flogti\SpanishCities;

use Illuminate\Support\ServiceProvider;

class SpanishCitiesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            Commands\SpanishCitiesInstallCommand::class,
        ]);
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
}
