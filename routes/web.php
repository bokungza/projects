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


Route::get('/myOrders', 'MyOrdersController@index')->name('myOrders')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/LoginPayments', 'LoginPaymentsController@index')->name('LoginPayments')->middleware('auth');

Route::resource('/products','ProductsController');

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
