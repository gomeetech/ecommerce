<?php

namespace Gomee\Ecommerce\Providers;

use Gomee\Core\System;
use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        System::addPackage('ecommerce', dirname(dirname(dirname(dirname(__FILE__)))));
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
