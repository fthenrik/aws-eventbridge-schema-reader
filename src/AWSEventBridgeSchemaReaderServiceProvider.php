<?php

namespace Foodticket\AWSEventBridgeSchemaReader;

use Illuminate\Support\ServiceProvider;

class AWSEventBridgeSchemaReaderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'aws-eventbridge-schema-reader');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'aws-eventbridge-schema-reader');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('aws-eventbridge-schema-reader.php'),
            ], 'config');

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/aws-eventbridge-schema-reader'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'aws-eventbridge-schema-reader');

        // Register the main class to use with the facade
        $this->app->singleton('aws-eventbridge-schema-reader', function () {
            return new AWSEventBridgeSchemaReader;
        });
    }
}
