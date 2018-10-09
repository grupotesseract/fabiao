<?php

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'cep' => '18510301',
            'endereco' => 'R Afrânio Almeida',
            'numero' => '25-3',
            'itemId' => '3',
            'preco' => '9',
            'bairro' => 'Jardim Chapadão',
            'cidade' => 'Boituva',
            'estado' => 'AM',
            'email' => 'alextester@terra.com.br',
            'nome' => 'Alex Noronha',
            'cpf' => '73017806057',
            'nascimento' => '21/01/1975'
        ]);

    }
}
