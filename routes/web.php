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

// Rotas para API

Route::get('api/texto_entrada', 'TextoEntradaController@textoEntrada');

Route::get('api/texto_exposicao_a_crise', 'TextoExposicaoACriseController@textoExposicaoACrise');

Route::get('api/texto_posicionamento_estrategico', 'TextoPosicionamentoEstrategicoController@textoPosicionamentoEstrategico');

Route::get('api/texto_posicao_financeira', 'TextoPosicaoFinanceiraController@textoPosicaoFinanceira');

Route::get('api/texto_cubo', 'TextosCuboController@textosCubo');

Route::get('api/texto_iniciativa', 'TextosIniciativaController@textosIniciativa');

Route::get('api/anexos', 'TextosIniciativaController@anexos');

Route::get('api/texto_detalhamento_iniciativa', 'TextosDetalhamentoIniciativaController@textosDetalhamentoIniciativa');

Auth::routes();


Route::resource('textoEntradas', 'TextoEntradaController');

Route::resource('textoExposicaoACrises', 'TextoExposicaoACriseController');

Route::resource('textoPosicionamentoEstrategicos', 'TextoPosicionamentoEstrategicoController');

Route::resource('textoPosicaoFinanceiras', 'TextoPosicaoFinanceiraController');

Route::resource('textosCubos', 'TextosCuboController');

Route::resource('textosIniciativas', 'TextosIniciativaController');

Route::resource('textosDetalhamentoIniciativas', 'TextosDetalhamentoIniciativaController');

