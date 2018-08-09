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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('users', 'UserController');

Auth::routes();


Route::resource('textoEntradas', 'TextoEntradaController');

Route::resource('textoExposicaoACrises', 'TextoExposicaoACriseController');

Route::resource('textoPosicionamentoEstrategicos', 'TextoPosicionamentoEstrategicoController');

Route::resource('textoPosicaoFinanceiras', 'TextoPosicaoFinanceiraController');

Route::resource('textosCubos', 'TextosCuboController');

Route::resource('textosIniciativas', 'TextosIniciativaController');

Route::resource('textosDetalhamentoIniciativas', 'TextosDetalhamentoIniciativaController');
