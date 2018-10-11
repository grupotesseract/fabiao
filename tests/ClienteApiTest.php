<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClienteApiTest extends TestCase
{
    use MakeClienteTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateCliente()
    {
        $cliente = $this->fakeClienteData();
        $this->json('POST', '/api/v1/clientes', $cliente);

        $this->assertApiResponse($cliente);
    }

    /**
     * @test
     */
    public function testReadCliente()
    {
        $cliente = $this->makeCliente();
        $this->json('GET', '/api/v1/clientes/'.$cliente->id);

        $this->assertApiResponse($cliente->toArray());
    }

    /**
     * @test
     */
    public function testUpdateCliente()
    {
        $cliente = $this->makeCliente();
        $editedCliente = $this->fakeClienteData();

        $this->json('PUT', '/api/v1/clientes/'.$cliente->id, $editedCliente);

        $this->assertApiResponse($editedCliente);
    }

    /**
     * @test
     */
    public function testDeleteCliente()
    {
        $cliente = $this->makeCliente();
        $this->json('DELETE', '/api/v1/clientes/'.$cliente->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/clientes/'.$cliente->id);

        $this->assertResponseStatus(404);
    }
}
