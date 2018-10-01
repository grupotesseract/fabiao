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
    Route::resource('clientes', 'ClienteController');
});

// Rotas para API
Route::get('api/texto_entrada', 'TextoEntradaController@textoEntrada');
Route::get('api/perguntas', 'PerguntasController@perguntas');
Route::get('api/texto_cubo', 'TextosCuboController@textosCubo')->name('texto_cubo');
Route::get('api/anexos/{id}', 'TextosCuboController@anexos');
Route::post('api/resposta_cubo/', 'TextosCuboController@respostaCubo')->name('resposta_cubo');
