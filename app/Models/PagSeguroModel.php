<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use PagSeguro;

/**
 * Model que lida com o PagSeguro
 * 
 */
class PagSeguroModel extends Model
{
    public static function confirmaPagamento($cliente)
    {

        $data = [
            'items' => [
                [
                    'id' => $cliente->itemId,
                    // 'id' => '2',
                    'description' => '3D - Posicionamento estratégico',
                    'quantity' => '1',
                    'amount' => '1.00',
                ],
            ],
            'shipping' => [
                'address' => [
                    'postalCode' => $cliente->cep,
                    'street' => $cliente->endereco,
                    'number' => $cliente->numero,
                    'district' => $cliente->bairro,
                    'city' => $cliente->cidade,
                    'state' => $cliente->estado,
                    'country' => 'BRA',
                ],
                'type' => 2,
                'cost' => 0,
            ],
            'sender' => [
                'email' => $cliente->email,
                'name' => $cliente->nome,
                'documents' => [
                    [
                        'number' => $cliente->cpf,
                        'type' => 'CPF'
                    ]
                ],
                'bornDate' => date("Y-m-d", strtotime($cliente->nascimento)),
            ]
        ];

        $checkout = PagSeguro::checkout()->createFromArray($data);
        
        $credentials = PagSeguro::credentials()->get();

        $information = $checkout->send($credentials); // Retorna um objeto de laravel\pagseguro\Checkout\Information\Information
        
        return response($information->getLink(), 200);

    }
}
