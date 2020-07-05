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
    return view('artikel.gambar');
});

Route::get('/artikel', 'ArtikelController@index')->name('index');
Route::get('/artikel/create', 'ArtikelController@create')->name('tambah-artikel');
Route::post('/artikel', 'ArtikelController@store')->name('create');
Route::get('/artikel/{id}/edit', 'ArtikelController@edit')->name('edit');
Route::put('/artikel/{id}', 'ArtikelController@update')->name('update');
Route::delete('/artikel/{id}', 'ArtikelController@destroy')->name('hapus');
Route::get('/artikel/{id}', 'ArtikelController@show')->name('show');
