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
Route::get('/','pagescontroller@homepage');
Route::get('home','pagescontroller@homepage');
Route::get('register','pagescontroller@register');
Route::get('about','pagescontroller@about');
Route::get('siswa','siswacontroller@siswa');
Route::get('template','pagescontroller@template');
Route::get('create','siswacontroller@create');
Route::post('simpan','siswacontroller@store');
Route::get('siswa/{siswa}','siswacontroller@show');
Route::get('siswa/{siswa}/edit','siswacontroller@edit');
Route::post('siswa/{siswa}/update','siswacontroller@update');
Route::get('siswa/{siswa}/delete','siswacontroller@delete');
Route::get('/siswa/{id}/profile','siswacontroller@profile');
Route::get('cetak', 'siswacontroller@cetak');

//kelas
Route::get('kelas', 'kelascontroller@kelas');
Route::post('simpankls', 'kelascontroller@store');
Route::get('kelas/{kelas}','kelascontroller@detailkelas');
Route::get('kelas/{kelas}/editkls','kelascontroller@editkls');
Route::post('kelas/{kelas}/updatekelas','kelascontroller@updatekelas');
Route::get('tambahkls','kelascontroller@tambahkls');
Route::get('kelas/{kelas}/deletekls','kelascontroller@deletekls');


//guru
Route::get('guru','gurucontroller@guru');
Route::get('createguru','gurucontroller@createguru');
Route::post('simpanguru','gurucontroller@store');
Route::get('guru/{guru}','gurucontroller@show');
Route::get('guru/{guru}/delete','gurucontroller@delete');
Route::get('guru/{guru}/edit','gurucontroller@edit');
Route::post('guru/{guru}/update','gurucontroller@update');

//walikelas
Route::get('walikelas','walikelascontroller@walikelas');
Route::get('createwali','walikelascontroller@createwali');
Route::post('simpanwali','walikelascontroller@store');
Route::get('walikelas/{walikelas}','walikelascontroller@show');
Route::get('walikelas/{walikelas}/editwali','walikelascontroller@editwali');
Route::post('walikelas/{walikelas}/updatewali','walikelascontroller@updatewali');
Route::get('walikelas/{walikelas}/deletewali','walikelascontroller@deletewali');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

