<?php

namespace viandry\andreylb3\Providers;

use Illuminate\Support\ServiceProvider;

class ShopServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('ExchangeRate', function($app) {
            return new ExchangeRate();
        });
        $this->app->bind('ShippingCost', function($app) {
            return new ShippingCost();
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

            $this->publishes([
                __DIR__ . '/../../config/example.php' => config_path('example.php'),
            ]);

            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/blogpackage'),
            ], 'views');
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'blogpackage');
        $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
    }
}