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

// Route::get('/products', 'ProductsController@listCatAll');
Route::get('/{categoria}', 'CategoryController@index')->name('category');

//Route::get('/{categories}', 'CategoryController@productCatAll');

//Route::get('/categories', 'CategoryController@productCatAll');

//Route::get('/products', 'ProductsController@list');
