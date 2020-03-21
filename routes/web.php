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

Route::get('/products', function () {
    return view('Products.productsGrid');
});

Route::get('/products-grid', function () {
    return view('Products.productsGrid');
});

Route::get('/products-list', function () {
    return view('Products.productsList');
});

Route::get('/product-show', function () {
    return view('Products.showProduct');
});

Route::get('/buyers', function () {
    return view('Buyers.buyers');
});

Route::get('/orders', function () {
    return view('Orders.orders');
});

Route::get('/orders/invoice', function () {
    return view('Orders.invoice');
});

Route::get('/product/create', function () {
    return view('Products.create');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
