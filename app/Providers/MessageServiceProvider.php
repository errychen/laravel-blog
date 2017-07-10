<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MessageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('message', function ($app) {
            $config = $app->make('config')->get('database.redis');

            return $config;
        });

//        $this->app->bind('message.connection', function ($app) {
//            return $app['redis']->connection();
//        });
    }
}
