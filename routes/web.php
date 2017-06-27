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

Route::get('/', function () {
		$name = 'Laracast';
		$tasks = [
		'Finish Laravel Starter Lessons',
		'Go to the gym',
		'Meet Fiona for dinner'
		];
		// compact creates an array with the key of name and a value of the variable $name
    return view('welcome', compact('name', 'tasks'));
});

Route::get('about', function () {
    return view('about');
});
