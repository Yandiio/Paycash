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

Route::get('/home', 'HomeController@index')->name('main');
Route::get('/pembayaran',function(){
    return view ('Admin.pembayaran');
});
Route::get('/mutasi',function(){
    return view ('Admin.mutasi');
});


