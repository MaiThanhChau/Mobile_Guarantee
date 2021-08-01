<?php
use Modules\Product\Http\Controllers\ProductController;
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
    Route::resource('product', 'ProductController');
    Route::get('create_product',[ProductController::class,'create_import'])->name('create_product');
    Route::post('import_product',[ProductController::class,'import'])->name('import_product');
    Route::get('export_product',[ProductController::class,'export'])->name('export_product');