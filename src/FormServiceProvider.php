<?php

namespace AlAmin\Form;

use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/route.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(
            __DIR__ . '/config/form.php',
            'form'
        );
        $this->publishes([
            __DIR__ . '/config/form.php' => config_path('form.php')
        ],'form-config');
    }

    public function register()
    {
    }
}
