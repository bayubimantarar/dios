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

Route::group(['prefix' => '/'], function(){
    Route::get('/', [
        'uses' => 'PegawaiController@index',
        'as' => 'pegawai'
    ]);
    Route::get('/data', [
        'uses' => 'PegawaiController@data',
        'as' => 'pegawai.data'
    ]);
    Route::get('/form-tambah', [
        'uses' => 'PegawaiController@create',
        'as' => 'pegawai.form_tambah'
    ]);
    Route::post('/simpan', [
        'uses' => 'PegawaiController@store',
        'as' => 'pegawai.simpan'
    ]);
    Route::get('/form-ubah/{id}', [
        'uses' => 'PegawaiController@edit',
        'as' => 'pegawai.form_ubah'
    ]);
    Route::put('/ubah/{id}', [
        'uses' => 'PegawaiController@update',
        'as' => 'pegawai.ubah'
    ]);
    Route::delete('/hapus/{id}', [
        'uses' => 'PegawaiController@destroy',
        'as' => 'pegawai.hapus'
    ]);
});
