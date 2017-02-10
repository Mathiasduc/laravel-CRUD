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

Route::get('/', 'FruitController@getIndex')->name('home');

Route::get('/products', 'FruitController@getIndex');

Route::get('/products/show/{id}', 'FruitController@getShow');

Route::match(['put','delete'],'/products/stock/id/{id}/quantity/{quantity}','FruitController@getStockModif');

Route::post('/products/addProduct', 'FruitController@addNewProduct');
Route::delete('/products/id/{id}', 'FruitController@deleteProduct');