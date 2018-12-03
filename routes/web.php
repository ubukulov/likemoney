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

Route::get('/', 'IndexController@index')->name('home');
Route::get('/test', 'TestController@index');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/xml', 'XmlController@index');
Route::get('/set/brands', 'TestController@setBrands');
Route::get('/catalog/{name}', 'CatalogController@index')->name('catalog.index');
Route::post('/sign-up', 'AuthController@signUp')->name('sign-up');
Route::post('/sign-in', 'AuthController@signIn')->name('sign-in');
Route::get('/add/{product_id}', 'CheckoutController@add');
Route::get('/cart', 'CheckoutController@index')->name('cart.index');
Route::get('/cart/delete/{product_id}', 'CheckoutController@remove');

Route::group(['namespace' => 'Usr', 'middleware' => ['auth'], 'prefix' => 'user'], function(){
    Route::get('cabinet', 'UserController@cabinet')->name('user.cabinet');
});