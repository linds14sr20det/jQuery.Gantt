<?php

namespace linds14sr20det\jquerygantt;

use Depotwarehouse\Toolbox\FrameworkIntegration\Laravel\ViewComposers\ErrorPartialComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\View\Factory;

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

