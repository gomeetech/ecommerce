<?php

namespace Gomee\Ecommerce\Providers;

use Illuminate\Support\ServiceProvider;

use Gomee\Core\System;
use Gomee\Core\RouteManager;

class ManifestServiceProvider extends ServiceProvider
{
    protected $dir = null;
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->dir = dirname(dirname(dirname(dirname(__FILE__))));
        RouteManager::package('ecommerce');
        System::addPackage('ecommerce', $this->dir, [
            'routes' => [
                'admin' => [
                    'test' => 'test.php'
                ]
            ],
            'menus' => [
                'admin' => ['test.json']
            ]
        ]);



        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

            $this->publishes([
                __DIR__ . '/../../database/migrations' => database_path('migrations'),
            ], 'ecommerce-migrations');

            $this->publishes([
                __DIR__ . '/../../views' => base_path('resources/views/vendor/ecommerce'),
            ], 'ecommerce-views');

        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views', 'ecommerce');
    }
}
