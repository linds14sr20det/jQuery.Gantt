<?php

namespace Linds14sr20det\JQueryGantt;

use Illuminate\Support\ServiceProvider;

class JQueryGanttServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/public' => base_path('public/jQuery.Gantt')
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

