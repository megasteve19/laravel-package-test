<?php

namespace LaravelPackageTest\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelPackageTestServiceProviderTest extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/laravelpackagetest.php', 'laravelpackagetest'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'laravelpackagetest');
    }
}