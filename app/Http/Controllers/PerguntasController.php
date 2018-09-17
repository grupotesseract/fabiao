<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TextoExposicaoACrise;
use App\Models\TextoPosicionamentoEstrategico;
use App\Models\TextoPosicaoFinanceira;

class PerguntasController extends Controller
{
	/**
	 * Retorna objeto unificado com todas os textos de perguntas
	 *
	 * @return JSON
	 */
	public function perguntas()
	{
		$response = array_collapse([
			TextoPosicaoFinanceira::get(),
			TextoPosicionamentoEstrategico::get(),
			TextoExposicaoACrise::get(),
		]);

		return response($response);
	}
	
}
