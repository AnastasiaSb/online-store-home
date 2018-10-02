<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\GuzzleService;
//use App\Services\VinelabService;
class MyHttpClientServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Services\HttpClientServiceInterface', function ($app) {
            return new GuzzleService();
        });
//        $this->app->bind('App\Services\HttpClientServiceInterface', function ($app) {
//            return new VinelabService();
//        });
    }
}
