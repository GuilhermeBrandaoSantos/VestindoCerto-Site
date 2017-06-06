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


Route::get('/', function () {
    return view('welcome');
});

*/
// Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('index', 'HomeController@index');
Route::get('quem-somos', "QuemSomosController@index");
Route::get('contato', "ContatoController@index");
Route::get('login-2', "LoginController@index");


Route::get('como-funciona', "ComoFuncionaController@index");

Route::get('simulador', "SimuladorController@index");

Route::get('apresentacao', "ApresentacaoController@index");

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
