<?php

use App\Models\Cliente;
use App\Repositories\ClienteRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClienteRepositoryTest extends TestCase
{
    use MakeClienteTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ClienteRepository
     */
    protected $clienteRepo;

    public function setUp()
    {
        parent::setUp();
        $this->clienteRepo = App::make(ClienteRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateCliente()
    {
        $cliente = $this->fakeClienteData();
        $createdCliente = $this->clienteRepo->create($cliente);
        $createdCliente = $createdCliente->toArray();
        $this->assertArrayHasKey('id', $createdCliente);
        $this->assertNotNull($createdCliente['id'], 'Created Cliente must have id specified');
        $this->assertNotNull(Cliente::find($createdCliente['id']), 'Cliente with given id must be in DB');
        $this->assertModelData($cliente, $createdCliente);
    }

    /**
     * @test read
     */
    public function testReadCliente()
    {
        $cliente = $this->makeCliente();
        $dbCliente = $this->clienteRepo->find($cliente->id);
        $dbCliente = $dbCliente->toArray();
        $this->assertModelData($cliente->toArray(), $dbCliente);
    }

    /**
     * @test update
     */
    public function testUpdateCliente()
    {
        $cliente = $this->makeCliente();
        $fakeCliente = $this->fakeClienteData();
        $updatedCliente = $this->clienteRepo->update($fakeCliente, $cliente->id);
        $this->assertModelData($fakeCliente, $updatedCliente->toArray());
        $dbCliente = $this->clienteRepo->find($cliente->id);
        $this->assertModelData($fakeCliente, $dbCliente->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteCliente()
    {
        $cliente = $this->makeCliente();
        $resp = $this->clienteRepo->delete($cliente->id);
        $this->assertTrue($resp);
        $this->assertNull(Cliente::find($cliente->id), 'Cliente should not exist in DB');
    }
}
