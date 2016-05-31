<?php

namespace Linds14sr20det\JQueryGantt;

use Illuminate\Support\ServiceProvider;

class jQueryGanttServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Views' => base_path('public/vendor/linds4sr20det')
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}

