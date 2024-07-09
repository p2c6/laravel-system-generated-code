<?php

namespace P2c6\LaravelSystemGeneratedCode;

use Illuminate\Support\ServiceProvider;

class SystemGeneratedCodeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish configuration file
        $this->publishes([
            __DIR__.'/../config/system-generated-code.php' => config_path('system-generated-code.php'),
        ], 'config');
    }

    public function register()
    {
        // Register any bindings or configurations
    }
}
