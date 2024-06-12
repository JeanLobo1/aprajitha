<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('admin/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('admin.home')->middleware('isAdmin');
Route::get('accountant/home', [App\Http\Controllers\Accountant\HomeController::class, 'index'])->name('account.home');
Route::get('/create-accountant', [App\Http\Controllers\Auth\CreateAccountant::class, 'index']);

Route::post('/accountant', [App\Http\Controllers\Auth\CreateAccountant::class, 'create']);


Route::get('/book-keeping', [App\Http\Controllers\Accountant\BookKeepingController::class, 'index']);

Route::post('/create-item', [App\Http\Controllers\Accountant\BookKeepingController::class, 'create']);




// App\Http\Controllers\Auth\CreateAccountant

