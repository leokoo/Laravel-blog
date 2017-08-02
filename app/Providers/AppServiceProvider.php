<?php

namespace App\Providers;

use \App\Billing\Stripe;
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
		/**
		 * You can resolve a singleton instead of the usual bind.
		 * The singleton will result in the exact same instance no matter how many times you resolve
		 */

		\App::singleton('App\Billing\Stripe', function() {
			return new \App\Billing\Stripe(config('services.stripe.secret'));
		});

		/**
		 * You can use App::make(), resolve() or app(). They'll give similar results
		 */
		//		$stripe = App::make('App\Billing\Stripe');
    }
}
