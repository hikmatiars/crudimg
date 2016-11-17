<?php

/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
})->name('home'); */

Route::resource('content','ContentController');
Route::resource('dashboard','DashboardController');
//Route::resource('post',)
Route::post('/detail/show',['as'=>'detail','uses'=>'ContentController@show']);
Route::get('/',['as'=>'post','uses'=>'DashboardController@post']);
Route::post('/content/update','ContentController@update')->name('update');
