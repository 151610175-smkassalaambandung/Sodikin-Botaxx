<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware'=>'web'], function(){
Route::group(['prefix'=>'admin','middleware'=>['auth']], function(){
	Route::resource('staff','StaffController');
	Route::resource('kategori','KategoriController');
	Route::resource('tempat','TempatController');
	Route::resource('barang','BarangController');
	Route::resource('barangmasuk','BarangMasukController');
	Route::resource('penempatanbarang','PenempatanBarangController');
	Route::resource('penyesuaianstok','PenyesuaianStokController');
  });
});
