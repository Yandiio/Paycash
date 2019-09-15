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

Route::get('/transaksi',function(){
    return view ('Pembayaran.transaksi');
});
// Route::get('/dsp',function(){
//     return view ('Pembayaran.dsp');
// });

Route::resource('/siswa', 'SiswaController');

Route::resource('/jurusan', 'JurusanController');

Route::resource('/kelas', 'KelasController');

Route::get('/history',function(){
    return view ('laporan.history');
});
Route::get('/recap',function(){
    return view ('laporan.rekap');
});




