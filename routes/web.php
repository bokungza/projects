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

Route::get('/products', 'ProductsController@index');

Route::get('/product/{id}', 'ProductsController@detail')
    ->where('id' , '[0-9]+')
;

Route::post('/testdb','ProductsController@index');

Route::get('/carts', function () {
        return view('carts.items');
});
Route::get('/accounts', 'AccountsController@index')->name('accounts');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/payments', 'PaymentsController@index')->name('payments');

Route::get('/pays', 'PaysController@index')->name('pays');

Route::get('/LoginHomes', 'LoginHomesController@index')->name('LoginHomes');

Route::get('/LoginProducts', 'LoginProductsController@index')->name('LoginProducts');

Route::get('/LoginPayments', 'LoginPaymentsController@index')->name('LoginPayments');

Route::get('/addproduct','ProductsController@add');

Route::get('/addproductaction' , 'ProductsController@addAction');
