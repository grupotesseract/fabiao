<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use PagSeguro;

class PagSeguroModel extends Model
{
    public static function confirmaPagamento($cliente)
    {

        $data = [
            'items' => [
                [
                    'id' => $cliente->itemId,
                    'description' => '3D - Posicionamento estratégico',
                    'quantity' => '1',
                    'amount' => $cliente->preco,
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

        $pagSeguroInformation = $checkout->send($credentials);

        return response($pagSeguroInformation->getLink(), 200);

    }
}
