<?php

namespace TomatoPHP\FilamentThemesManager;

use Illuminate\Support\ServiceProvider;


class FilamentThemesManagerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \TomatoPHP\FilamentThemesManager\Console\FilamentThemesManagerInstall::class,
        ]);
 
        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/filament-themes-manager.php', 'filament-themes-manager');
 
        //Publish Config
        $this->publishes([
           __DIR__.'/../config/filament-themes-manager.php' => config_path('filament-themes-manager.php'),
        ], 'filament-themes-manager-config');
 
        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
 
        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'filament-themes-manager-migrations');
        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'filament-themes-manager');
 
        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/filament-themes-manager'),
        ], 'filament-themes-manager-views');
 
        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'filament-themes-manager');
 
        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => base_path('lang/vendor/filament-themes-manager'),
        ], 'filament-themes-manager-lang');
 
        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
 
    }

    public function boot(): void
    {
        //you boot methods here
    }
}
