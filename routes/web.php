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

Route::get('/', 'HomeController@index');

// PUEDE SERVIR PARA EL CARRITO 
// Route::get('/products', 'ProductsController@listCatAll');

Route::get('/{categoria}', 'CategoryController@index')->name('category');

//Para nombrar la ruta
Route::get('/productdetail', 'ProductDetailController@index');

Route::get('/{categoria}/{brand}', 'BrandController@index');

Route::get('/carrito', 'CarritoController@index');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
