<?php

use App\Order;
use App\Product;
use App\User;
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
    return view('index',[
        'users' => count(User::all()),
        'products' => count(Product::all()),
        'orders' => count(Order::all())
    ]);
});


Route::middleware(['auth', 'verified'])->group(function () {
    // Products routes
    Route::get('/products', "ProductController@index")->name('index');
    Route::get('/products-list', "ProductController@indexList")->name('productsList');
    Route::get('/product-show', "ProductController@show");
    Route::get('/product/create', "ProductController@create");
    Route::post('/product/store', "ProductController@store");
    Route::get('/product/{id}', "ProductController@edit")->name('products.edit');
    Route::put('/product/{id}', "ProductController@update");
    Route::delete('/product/{id}', "ProductController@destroy");
    
    // Buyers routes
    Route::get('/buyers', 'UserController@index')->name('buyers');

    // Orders routes
    Route::get('/orders', "OrderController@index");
    Route::get('/orders/{id}', "OrderController@currentUserOrders");
    Route::get('/orders/invoice/{id}', "OrderController@invoice");
    
    Route::post('/order/create/{id}','OrderController@addItem')->name('createOrder');
});

Auth::routes();