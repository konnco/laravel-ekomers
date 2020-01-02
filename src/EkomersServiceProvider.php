<?php

namespace Konnco\Ekomers;

use Illuminate\Support\ServiceProvider;

class EkomersServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishMigrations();
//        $this->publishModels();
        $this->publishConfig();
    }

    public function publishMigrations()
    {
        $this->publishes([__DIR__.'/migrations' => database_path('migrations')], 'ekomers');
    }

    public function publishModels()
    {
        $this->publishes([__DIR__.'/models' => app_path()], 'ekomers');
    }

    public function publishConfig()
    {
        $this->publishes([__DIR__.'/config/ekomers.php' => config_path('ekomers.php')], 'ekomers');
        $this->mergeConfigFrom(__DIR__.'/config/ekomers.php', 'ekomers');
    }
}
