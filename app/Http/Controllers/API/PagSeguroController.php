<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PagSeguro;
use App\Models\PagSeguroModel;

class PagSeguroController extends Controller
{

    /**
     * O método recebe um request, chama o método pagseguro e retorna response
     * @param request
     * @return response
     */
    public function post(Request $request)
    {
        return PagSeguroModel::confirmaPagamento($request);
    }

    public function notification(Request $request) 
    {
        return response("Ok", 200);
    }
}
