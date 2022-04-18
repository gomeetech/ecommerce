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


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
