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
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', function () {
		$name = 'Laracast';
		// compact creates an array with the key of name and a value of the variable $name
    return view('welcome', compact('name'));
});

Route::get('about', function () {
    return view('about');
});
