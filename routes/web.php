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

Route::get('/','Evento@index')->name('inicio');
Route::get('/home','Evento@index')->name('home');
Route::get('/inscricao','Aluno@index')->name('inscricaoevento');
Route::post('/inscricao','Aluno@store')->name('inscricaoeventostore');

Auth::routes();
Route::get('/alunos','AlunoLista@show')->name('alunos');;

// Route::get('/home', 'HomeController@index')->name('home');
