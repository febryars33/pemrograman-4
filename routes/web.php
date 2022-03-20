<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => true, // Password Reset Routes...
    'verify' => true, // Email Verification Routes...
]);
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductsController::class, 'index'])->name('products_index');
    Route::get('/create', [ProductsController::class, 'create'])->name('products_create');
    Route::get('/{id}', [ProductsController::class, 'show'])->name('products_show');

    Route::post('/create', [ProductsController::class, 'store'])->name('products_store');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
