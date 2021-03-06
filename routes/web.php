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

Route::get('/','PrincipalController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/pagseguro', function () {
    return view('pagseguro.index');
});*/

Route::get('/pagseguro', 'Pagseguro\PagseguroController@index');
Route::get('/payment', 'Pagseguro\PagseguroController@payment');