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
    return redirect('admin/home');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return redirect('admin/home');
    });

    Auth::routes();
    Route::resource('home', 'HomeController');
    Route::resource('users', 'UserController');
    Route::resource('textoEntradas', 'TextoEntradaController');
    Route::resource('textoExposicaoACrises', 'TextoExposicaoACriseController');
    Route::resource('textoPosicionamentoEstrategicos', 'TextoPosicionamentoEstrategicoController');
    Route::resource('textoPosicaoFinanceiras', 'TextoPosicaoFinanceiraController');
    Route::resource('textosCubos', 'TextosCuboController');
    Route::resource('textosIniciativas', 'TextosIniciativaController');
    Route::resource('textosDetalhamentoIniciativas', 'TextosDetalhamentoIniciativaController');
});

// Rotas para API
Route::get('api/texto_entrada', 'TextoEntradaController@textoEntrada');
Route::get('api/perguntas', 'PerguntasController@perguntas');
Route::get('api/texto_cubo', 'TextosCuboController@textosCubo');
Route::get('api/resposta_cubo/{tipo_resposta?}', 'TextosCuboController@respostaCubo')->name('resposta_cubo');
Route::get('api/texto_iniciativa', 'TextosIniciativaController@textosIniciativa');
Route::get('api/anexos', 'TextosCuboController@anexos');
Route::get('api/texto_detalhamento_iniciativa', 'TextosDetalhamentoIniciativaController@textosDetalhamentoIniciativa');
