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

Auth::routes();

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('products', 'ProductController@index')->name('products.index');

Route::get('/products/{id}/delete', 'ProductController@destroy')->name('products.destroy');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products', 'ProductController@store')->name('products.store');
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::put('/products/{id}', 'ProductController@update')->name('products.update');

Route::get('/clients/{id}/delete', 'ClientController@destroy')->name('clients.destroy');
Route::get('/clients/create', 'ClientController@create')->name('clients.create');
Route::post('/clients', 'ClientController@store')->name('clients.store');
Route::get('/clients', 'ClientController@index')->name('clients.index');
Route::get('/clients/{id}/edit', 'ClientController@edit')->name('clients.edit');
Route::put('/clients/{id}', 'ClientController@update')->name('clients.update');

Route::get('/listacliente', 'FrontClientController@listClient')->name('clients.list');