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

//inventaris
Route::get('/inventaris','InventarisController@index');
Route::post('/inventaris/create','InventarisController@create'); 
Route::get('/inventaris/{id_inventaris}/edit','InventarisController@edit');
Route::post('/inventaris/{$inventaris->id_inventaris}/update','InventarisController@update');
Route::get('/inventaris/{id_inventaris}/delete','InventarisController@delete');
Auth::routes();

Route::get('/peminjaman','PeminjamanController@index');
Route::post('/peminjaman/create','PeminjamanController@create'); 
Route::get('/peminjaman/{id_peminjaman}/edit','PeminjamanController@edit');
Route::post('/peminjaman/{$peminjaman->id_peminjaman}/update','PeminjamanController@update');
Route::get('/peminjaman/{id_peminjaman}/delete','PeminjamanController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
