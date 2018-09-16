<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PagSeguro;

class PagSeguroController extends Controller
{

    /**
     * O método recebe um request, chama o método pagseguro e retorna response
     * @param request
     * @return response
     */
    public function post(Request $request)
    {
        $data = [
            'items' => [
                [
                    'id' => $request->items['id'],
                    'description' => $request->items['description'],
                    'quantity' => $request->items['quantity'],
                    'amount' => $request->items['amount'],
                ],
            ],
            'shipping' => [
                'address' => [
                    'postalCode' => $request->items['shipping']['adress'],
                    'street' => $request->items['shipping']['street'],
                    'number' => $request->items['shipping']['number'],
                    'district' => $request->items['shipping']['district'],
                    'city' => $request->items['shipping']['city'],
                    'state' => $request->items['shipping']['state'],
                    'country' => 'BRA',
                ]
                // 'address' => [
                //     'postalCode' => '06410030',
                //     'street' => 'Rua Leonardo Arruda',
                //     'number' => '12',
                //     'district' => 'Jardim dos Camargos',
                //     'city' => 'Barueri',
                //     'state' => 'SP',
                //     'country' => 'BRA',
                // ],
                // 'type' => 2,
                // 'cost' => 0.0,
            ],
            'sender' => [
                'email' => $request->sender["email"],
                'name' => $request->sender["name"],
                'documents' => [
                    [
                        'number' => $request->sender["document"]["number"],
                        'type' => $request->sender["document"]["type"],
                    ]
                ],
                'phone' => $request->sender["phone"],
                'bornDate' => $request->sender["bornDate"],
            ]
        ];

        $checkout = PagSeguro::checkout()->createFromArray($data);
        
        $credentials = PagSeguro::credentials()->get();

        $information = $checkout->send($credentials); // Retorna um objeto de laravel\pagseguro\Checkout\Information\Information
        
        return response($information->getLink(), 200);

    }

    public function notification(Request $request) 
    {
        dd($request);
    }
}
