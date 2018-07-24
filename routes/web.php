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


Route::get('/', BaseController@home) {
    return view('home');
});

Route::get('/rendezvenyek',EventsController@index) {
    return view('events');
});

Route::get('/login', LoginController@login) {
    return view('login');
});
*/
Route::get('/', 'BaseController@index');

Route::get('/events','BaseController@events');

Route::get('/events/{event}','BaseController@show');

Route::get('/pevents','BaseController@pevents');

Route::get('/dev','BaseController@dev');



