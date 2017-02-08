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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', '\App\Http\Controllers\FruitController@getIndex');

Route::get('/products/show/{id}', '\App\Http\Controllers\FruitController@getShow');

Route::post('products/stock/{id}/{action}/{quantity}',
	'\App\Http\Controllers\FruitController@getStockModif');

Route::post('products/addProduct',
	'\App\Http\Controllers\FruitController@addNewProduct');
