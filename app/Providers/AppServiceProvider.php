<?php

namespace App\Providers;

use \App\Billing\Stripe;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{

	/**
	 * 	We're not using protected $defer = true because we have items in our boot method
	 */

	// protected $defer = true;
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
			$archives = \App\Post::archives();
			$tags = \App\Tag::has('posts')->pluck('name');

			$view->with(compact('archives', 'tags'));
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

		$this->app->singleton(Stripe::class, function() {
			return new Stripe(config('services.stripe.secret'));
		});

		/**
		 * You can use App::make(), resolve() or app(). They'll give similar results
		 */
		//		$stripe = App::make('App\Billing\Stripe');
    }
}
