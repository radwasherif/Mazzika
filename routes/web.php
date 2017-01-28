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
    return view('homepage');
});

Route::get('/music', function () {
    return view('music');
});

Auth::routes();

Route::get('/', function () {
    return view('homepage');
});
Route::get('/m/{name}', "MusicController@fetch_info");

Route::post('/m/{name}', "MusicController@add_review");

Route::get('/test', function()
	{
		return view('test');
	});

Auth::routes();

Route::get('/home', 'HomeController@index');


