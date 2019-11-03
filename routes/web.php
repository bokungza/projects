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

Route::get('/', 'HomeController@index')->name('home');

Route::post('/testdb','ProductsController@index');

Route::get('/change-password', 'Auth\ChangePasswordController@index')->name('password.change');
Route::post('/change-password', 'Auth\ChangePasswordController@changepassword')->name('password.updated');
Route::get('/orders', 'OrdersController@index')->name('orders')->middleware('auth');

Route::resource('/orders', 'OrdersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/payments', 'PaymentsController@index')->name('payments');

Route::get('/products/add', 'ProductsController@add')->name('products.add');
Route::resource('/products','ProductsController');

Route::resource('/addresses','AddressesController')->middleware('auth');

Route::get('/cart/checkout','CartsController@checkout')->name('cart.checkout');
Route::post('/cart/edit','CartsController@edit')->name('carts.edit');
Route::resource('/cart','CartsController')->middleware('auth');


Route::resource('/pays', 'PaysController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile','UsersController@profile')->name('profile');
Route::get('/profile/edit','UsersController@edit')->name('profile.edit');
Route::post('/profile/update', 'UsersController@update')->name('profile.update');
Route::get('/users','UsersController@index')->name('users.index');
Route::get('/users','UsersController@destroy')->name('users.destroy');


Route::resource('/users','UsersController');
