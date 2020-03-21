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
    return view('index');
});


Route::middleware(['auth', 'verified'])->group(function () {
    // Products routes
    Route::get('/products', "ProductController@index");
    Route::get('/products-grid', "ProductController@indexGrid");
    Route::get('/products-list', "ProductController@indexList");
    Route::get('/product-show', "ProductController@show");
    Route::get('/product/create', "ProductController@create");

    // Buyers routes
    Route::get('/buyers', 'UserController@index')->name('buyers');

    // Orders routes
    Route::get('/orders', "OrderController@index");
    Route::get('/orders/invoice', "OrderController@invoice");
});
Auth::routes();