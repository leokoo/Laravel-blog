<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * You can resolve a singleton instead of the usual bind.
 * The singleton will result in the exact same instance no matter how many times you resolve
 */

App::bind('App\Billing\Stripe', function() {
	return new \App\Billing\Stripe(config('services.stripe.secret'));
});

/**
 * You can use App::make(), resolve() or app(). They'll give similar results
 */
$stripe = App::make('App\Billing\Stripe');
// $stripe = resolve('App\Billing\Stripe');


Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store')->name('login');
Route::get('/logout','SessionsController@destroy');

Route::get('about', function () {
    return view('about');
});