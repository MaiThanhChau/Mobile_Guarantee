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

Route::prefix('order')->group(function() {
    Route::get('/', 'OrderController@index')->name('order.index');
    Route::get('/view/{id}', 'OrderController@show')->name('order.view');
    Route::get('/create', 'OrderController@create')->name('order.create');
    Route::get('/destroy/{id}', 'OrderController@destroy');
});
