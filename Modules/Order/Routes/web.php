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

use Modules\Order\Http\Controllers\OrderAjaxController;

Route::resource('order', OrderController::class);
Route::get('orders_ajax/getProducts', [OrderAjaxController::class, 'getProducts'])->name('orders_ajax.getProducts');
