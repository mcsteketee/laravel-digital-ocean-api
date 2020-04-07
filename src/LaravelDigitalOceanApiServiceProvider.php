<?php

namespace MCSteketee\LaravelDigitalOceanApi;

use Illuminate\Support\ServiceProvider;

class LaravelDigitalOceanApiServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/laravel_digital_ocean_api.php' => config_path('laravel_digital_ocean_api.php'),
        ], 'laravel-digital-ocean-api-config');
    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/laravel_digital_ocean_api.php',
            'laravel_digital_ocean_api'
        );
    }
}