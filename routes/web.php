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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/carrito', 'CartController@index')->name('cart')->middleware('auth');
Route::view('/ordenes', 'orders')->name('orders')->middleware('auth');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/{categorySlug}', 'CategoryController@index')->name('category');
Route::get('/{categorySlug}/{productSlug}', 'ProductController@index')->name('product');

Route::post('/cart/{productId}', 'CartController@addProduct')->name('addProductToCart');
Route::delete('/cart/{productId}', 'CartController@removeProduct')->name('removeProductFromCart');

Route::post('/orders', 'OrdersController@addOrder')->name('order');
