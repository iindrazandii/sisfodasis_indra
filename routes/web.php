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

Route::get('/admin', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('templates/frontend');
});

Route::get('/dasis', 'DasisController@index');
Route::get('/dasis/tambah', 'DasisController@tambah');
Route::post('/dasis/store', 'DasisController@store');
Route::get('/dasis/edit/{id}', 'DasisController@edit');
Route::put('/dasis/update/{id}', 'DasisController@update');
Route::get('/dasis/hapus/{id}', 'DasisController@delete');

Route::get('/dakel', 'DakelController@index');
Route::get('/dakel/tambah', 'DakelController@tambah');
Route::post('/dakel/store', 'DakelController@store');
Route::get('/dakel/edit/{id}', 'DakelController@edit');
Route::put('/dakel/update/{id}', 'DakelController@update');
Route::get('/dakel/hapus/{id}', 'DakelController@delete');

Route::get('/danilai', 'DanilaiController@index');
Route::get('/danilai/tambah', 'DanilaiController@tambah');
Route::post('/danilai/store', 'DanilaiController@store');
Route::get('/danilai/edit/{id}', 'DanilaiController@edit');
Route::put('/danilai/update/{id}', 'DanilaiController@update');
Route::get('/danilai/hapus/{id}', 'DanilaiController@delete');

Route::get('/dapel', 'DapelController@index');
Route::get('/dapel/tambah', 'DapelController@tambah');
Route::post('/dapel/store', 'DapelController@store');
Route::get('/dapel/edit/{id}', 'DapelController@edit');
Route::put('/dapel/update/{id}', 'DapelController@update');
Route::get('/dapel/hapus/{id}', 'DapelController@delete');

Route::get('/dagur', 'DagurController@index');
Route::get('/dagur/tambah', 'DagurController@tambah');
Route::post('/dagur/store', 'DagurController@store');
Route::get('/dagur/edit/{id}', 'DagurController@edit');
Route::put('/dagur/update/{id}', 'DagurController@update');
Route::get('/dagur/hapus/{id}', 'DagurController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
