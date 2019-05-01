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

Route::get('/','WelcomeController@index');
Route::get('/konfirmasi/{id}', 'pendaftaranController@index');
Route::get('/pretest', 'pendaftaranController@pretest');
Route::get('/finish', 'pendaftaranController@stoppretest');
Route::get('/selesai/{id}', 'kpesertaController@materidetailselesai');


Route::get('/finish', 'pendaftaranController@stoppretest');
Route::get('/finishq', 'pendaftaranController@stopquiz');
Route::get('/finishp', 'pendaftaranController@stoppenugasan');
Route::get('/finishk', 'pendaftaranController@stopkompre');
Route::get('/finishps', 'pendaftaranController@stopposttest');

Route::get('/kompre','kpesertaController@kompre');
Route::get('/quiz','kpesertaController@quiz');
Route::get('/penugasan','kpesertaController@penugasan');
Route::get('/posttest', 'kpesertaController@posttest');

Route::get('/materi/{id}', 'kpesertaController@materidetail');
Route::get('/materip/{id}', 'kpesertaController@materi');
Route::get('/submateri/{id}', 'kpesertaController@submateri');

Route::get('/peserta', 'pesertaController@index');
Route::get('/kelaspeserta','kpesertaController@index');
Auth::routes();
Route::get('/join/{id}', 'WelcomeController@join');
Route::get('/detail/{id}', 'DetailMateriController@index');
Route::get('/daftar', 'daftarkController@index');

Route::get('daftarkelas', 'daftarkController@tambahk');

Route::get('/home', 'HomeController@index');

Route::resource('kelas', 'kelasController');

Route::resource('penggunas', 'penggunaController');

Route::resource('soals', 'soalController');

Route::resource('nilais', 'nilaiController');

Route::resource('materis', 'materiController');

Route::resource('penugasans', 'penugasanController');

Route::resource('materidetails', 'materidetailController');

