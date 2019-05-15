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

Route::resource('candidatas', 'CandidataController')->middleware('auth');

Route::resource('votos', 'VotoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('principal', 'CandidataController@principal')->name('candidatas.principal');

Route::post('pesquisar', 'CandidataController@pesquisar')->name('candidatas.pesquisar');

Route::get('candidata/{id}', 'CandidataController@detalhes')->name('candidatas.detalhes');

Route::post('createVotos', 'CandidataController@createVotos')->name('candidatas.createVotos');

Route::get('contagem', 'VotoController@contagem')->name('votos.contagem');

Route::get('cand_email/{id}', 'CandidataController@email')->name('candidatas.email');