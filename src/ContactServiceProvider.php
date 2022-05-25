<?php

namespace jsbhudev\faq;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {
    }
}
