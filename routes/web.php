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


Route::get('/', 'BaseController@index');

Route::get('/events','BaseController@events');

Route::get('/events/{event}','BaseController@show');

Route::get('/pevents','BaseController@pevents');

Route::get('/dev','BaseController@dev');

Route::post('/dev','BaseController@dev_post');

Route::get('/how2','BaseController@how2');

Route::get('/profile','BaseController@profile')

Route::get('/library','BaseController@library');



