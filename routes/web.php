<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*
Route::get('/', function () {
    return view('barang.index');
});
*/
Route::get('/','BarangController@index')->name('barang');
Route::get('create','BarangController@create')->name('barang.create');
Route::post('create','BarangController@store')->name('barang.store');
Route::get('delete/{id}','BarangController@destroy')->name('barang.delete');
Route::get('edit/{id}','BarangController@edit')->name('barang.edit');
Route::post('edit/edit/{id}','BarangController@update')->name('barang.update');

Route::get('penjualan','PenjualanController@index')->name('penjualan');
Route::get('penjualan/create','PenjualanController@create')->name('penjualan.create');
Route::post('penjualan/create','PenjualanController@store')->name('penjualan.store');
Route::get('penjualan/delete/{id}','PenjualanController@destroy')->name('penjualan.delete');
Route::get('penjualan/edit/{id}','PenjualanController@edit')->name('penjualan.edit');
Route::post('penjualan/edit/edit/{id}','PenjualanController@update')->name('penjualan.update');


Route::get('laporan','LaporanController@index')->name('laporan');