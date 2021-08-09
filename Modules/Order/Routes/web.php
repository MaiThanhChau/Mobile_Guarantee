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
Route::get('orders_ajax/getProducts/{cr_warehouse_id}', [OrderAjaxController::class, 'getProducts'])->name('orders_ajax.getProducts');
Route::get('orders_ajax/getAllProducts', [OrderAjaxController::class, 'getAllProducts'])->name('orders_ajax.getAllProducts');
Route::get('orders_ajax/getCustomers', [OrderAjaxController::class, 'getCustomers']);
Route::get('orders_ajax/get', [OrderAjaxController::class, 'get']);
