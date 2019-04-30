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


Auth::routes();
Route::get('/join/{id}', 'WelcomeController@join');
Route::get('/detail/{id}', 'DetailMateriController@index');
Route::get('/daftar', function(){
    if (Auth::user()) {
        return redirect('/kelas');
    }
    return redirect('/login');
    
});

Route::get('/home', 'HomeController@index');

Route::resource('kelas', 'kelasController');

Route::resource('penggunas', 'penggunaController');

Route::resource('soals', 'soalController');

Route::resource('nilais', 'nilaiController');

Route::resource('materis', 'materiController');

Route::resource('penugasans', 'penugasanController');

Route::resource('materidetails', 'materidetailController');

