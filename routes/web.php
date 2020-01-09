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


//Accesible a todos//
Route::get('/', 'HomeController@index')->name('home');
Route::get('/faq', function(){return view ('/faq');});
Route::get('/conocenos', function(){return view ('/conocenos');});
Route::get('/contactanos', function(){return view ('/contactanos');});


//Accesible solo para el administrado//
Route::group(['middleware' => 'admin'], function () {

Route::get('/categoriesabm', 'CategoryController@abm');
Route::get('/delete_category/{id_category}', 'CategoryController@deleteCategory');
Route::view('/add_category', '/add_category');
Route::post('/add_category', 'CategoryController@AddCategory');
Route::get('/edit_category/{id_category}', 'CategoryController@showEdit');
Route::post('/edit_category/{id_category}', 'CategoryController@edit');
});
//Accesible a usuarios logueados//
Route::get('/carrito', 'CartController@index')->name('cart')->middleware('auth');
Route::view('/ordenes', 'orders')->name('orders')->middleware('auth');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::post('/orders', 'OrdersController@addOrder')->name('order');
Route::post('/cart/{productId}', 'CartController@addProduct')->name('addProductToCart');
Route::delete('/cart/{productId}', 'CartController@removeProduct')->name('removeProductFromCart');
Route::get('/{categorySlug}', 'CategoryController@index')->name('category');
Route::get('/{categorySlug}/{productSlug}', 'ProductController@index')->name('product');
//Todas las rutas que sean {slug}deben estar colocadas con posterioridad a las que no los sean para no ocasionar errores//
