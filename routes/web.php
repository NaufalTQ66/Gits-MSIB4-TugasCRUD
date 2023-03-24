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
    return view('home');
})->name('home');

// Category dan Product routes
Route::resource('categories', 'App\Http\Controllers\CategoryController');
Route::resource('products', 'App\Http\Controllers\ProductController');
Route::resource('carts', 'App\Http\Controllers\CartController');

// Cart routes
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index');
Route::post('/cart/{product}', 'App\Http\Controllers\CartController@store')->name('cart.store');
Route::patch('/cart/{id}', 'App\Http\Controllers\CartController@update')->name('cart.update');
Route::delete('/cart/{id}', 'App\Http\Controllers\CartController@destroy')->name('cart.destroy');
