<?php

namespace Snapperit\Fishead;

use Illuminate\Support\ServiceProvider;

class AlbumsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
		include __DIR__.'/routes/web.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
		$this->app->make('Snapperit\Fishead\Controllers\AlbumsController');
        $this->app->make('Snapperit\Fishead\Controllers\JobsController');
		$this->loadViewsFrom(__DIR__.'/views', 'album');
    }
}
