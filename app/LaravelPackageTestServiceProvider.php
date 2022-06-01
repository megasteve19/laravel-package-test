<?php

namespace LaravelPackageTest;

use Illuminate\Support\ServiceProvider;

use LaravelPackageTest\Console\Commands\SayHello;

class LaravelPackageTestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravelpackagetest.php', 'laravelpackagetest'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravelpackagetest');

        if($this->app->runningInConsole())
        {
            $this->commands([
                SayHello::class,
            ]);
        }

        $this->publishes([
            __DIR__.'/../config/laravelpackagetest.php' => config_path('laravelpackagetest.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/laravelpackagetest'),
        ], 'public');

        config(['laravelpackagetest.mix.manifest.directory' => 'vendor/laravelpackagetest/']);
    }
}
