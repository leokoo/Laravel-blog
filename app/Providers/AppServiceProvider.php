<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // https://laravel.com/docs/5.4/helpers#method-view
		// https://laravel.com/docs/5.4/views#view-composers
		view()->composer('layouts.sidebar', function($view){
			$view->with('archives', \App\Post::archives());
		});

	}

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
