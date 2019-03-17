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
    return view('auth.login');
});
Route::post('authenticate','Auth\LoginController@authenticate');

Route::get('asset/listing', 'HomeController@index')->name('listing');
Route::get('asset/details/{id}', 'HomeController@details')->name('details');

Auth::routes();
