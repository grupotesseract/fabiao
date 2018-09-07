<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PagSeguro;

class PagSeguroController extends Controller
{
    public function post(Request $request)
    {
        $data = [
            'items' => [
                [
                    'id' => '18',
                    'description' => 'Item Um',
                    'quantity' => '1',
                    'amount' => '1.15',
                ],
            ],
            'shipping' => [
                'address' => [
                    'postalCode' => '06410030',
                    'street' => 'Rua Leonardo Arruda',
                    'number' => '12',
                    'district' => 'Jardim dos Camargos',
                    'city' => 'Barueri',
                    'state' => 'SP',
                    'country' => 'BRA',
                ],
                'type' => 2,
                'cost' => 1.4,
            ],
            'sender' => [
                'email' => $request->sender["email"],
                'name' => $request->sender["name"],
                'documents' => [
                    [
                        'number' => $request->sender["document"]["number"],
                        'type' => 'CPF',
                    ]
                ],
                'phone' => '11985445522',
                'bornDate' => '1988-03-21',
            ]
        ];

        $checkout = PagSeguro::checkout()->createFromArray($data);
        
        $credentials = PagSeguro::credentials()->get();

        $information = $checkout->send($credentials); // Retorna um objeto de laravel\pagseguro\Checkout\Information\Information
        
        return response($information->getLink(), 200);

    }
}
