<?php

namespace jsbhudev\faq;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->registerRoutes();
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'jsbhudev');
        // $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        // $this->loadRoutesFrom(__DIR__.'/routes/api.php');
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        });
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->mergeConfigFrom(__DIR__.'/config/faq.php', 'faq');
        $this->publishes([
            __DIR__.'/config/faq.php' => config_path('faq.php'),
          ], 'config');
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => 'jsbhudev',
            // 'middleware' => config('blogpackage.middleware'),
        ];
    }

    public function register()
    {
    }
}
