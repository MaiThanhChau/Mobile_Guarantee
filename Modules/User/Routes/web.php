<?php
use Modules\User\Http\Controllers\UserController;
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
Route::resource('user', 'UserController');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'post_login'])->name('PostLogin');