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

Route::get('/', 'FruitController@getIndex');

Route::get('/products', 'FruitController@getIndex');

Route::get('/products/show/{id}', 'FruitController@getShow');

Route::post('/products/stock/{id}/{action}/{quantity}','FruitController@getStockModif');

Route::post('/products/addProduct', 'FruitController@addNewProduct');
Route::delete('/products/delete/{id}', 'FruitController@deleteProduct');