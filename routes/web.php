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

/*
Route::get('/orders', function() {
    return view('pages.orders');
});
*/

Route::get('/orders', 'OrdersController@index');

Route::get('/orders/{id}', function($id) {
    //return view('pages.orders');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('queries', 'QueriesController');