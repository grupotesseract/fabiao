<?php

use Faker\Factory as Faker;
use App\Models\Cliente;
use App\Repositories\ClienteRepository;

trait MakeClienteTrait
{
    /**
     * Create fake instance of Cliente and save it in database
     *
     * @param array $clienteFields
     * @return Cliente
     */
    public function makeCliente($clienteFields = [])
    {
        /** @var ClienteRepository $clienteRepo */
        $clienteRepo = App::make(ClienteRepository::class);
        $theme = $this->fakeClienteData($clienteFields);
        return $clienteRepo->create($theme);
    }

    /**
     * Get fake instance of Cliente
     *
     * @param array $clienteFields
     * @return Cliente
     */
    public function fakeCliente($clienteFields = [])
    {
        return new Cliente($this->fakeClienteData($clienteFields));
    }

    /**
     * Get fake data of Cliente
     *
     * @param array $postFields
     * @return array
     */
    public function fakeClienteData($clienteFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'itemId' => $fake->word,
            'preco' => $fake->word,
            'cep' => $fake->word,
            'endereco' => $fake->word,
            'numero' => $fake->word,
            'bairro' => $fake->word,
            'cidade' => $fake->word,
            'estado' => $fake->word,
            'email' => $fake->word,
            'nome' => $fake->word,
            'cpf' => $fake->word,
            'nascimento' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $clienteFields);
    }
}
