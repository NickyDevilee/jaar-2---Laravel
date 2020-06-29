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

Route::get('/', [
	'uses' => 'products_controller@getProducts',
	'as' => 'products.index'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-to-cart/{id}', [
	'uses' => 'products_controller@getAddToCart',
	'as' => 'opdracht.addToCart'
]);

Route::get('/product/{id}', [
	'uses' => 'products_controller@getProduct',
	'as' => 'products.product'
]);

Route::get('/cart', [
    'uses' => 'products_controller@getCart',
    'as' => 'opdracht.cart'
]);

Route::get('/category/{id}', [
    'uses' => 'products_controller@getProductsFromCatId',
    'as' => 'opdracht.category'
]);

Route::get('/reduce/{id}', [
    'uses' => 'products_controller@getReduce',
    'as' => 'products.reduceOne'
]);

Route::get('/empty/{id}', [
    'uses' => 'products_controller@getEmpty',
    'as' => 'products.empty'
]);

Route::post('/checkout', [
    'uses' => 'products_controller@postCheckout',
    'as' => 'products.checkout'
]);

Route::get('/orders', [
    'uses' => 'OrdersController@getOrders',
    'as' => 'opdracht.orders'
]);