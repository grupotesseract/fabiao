<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateClienteAPIRequest;
use App\Http\Requests\API\UpdateClienteAPIRequest;
use App\Models\Cliente;
use App\Repositories\ClienteRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\PagSeguroModel;

/**
 * Class ClienteController
 * @package App\Http\Controllers\API
 */

class ClienteAPIController extends AppBaseController
{
    private $clienteRepository;

    public function __construct(ClienteRepository $clienteRepo)
    {
        $this->clienteRepository = $clienteRepo;
    }

    /**
     * Display a listing of the Cliente.
     * GET|HEAD /clientes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->clienteRepository->pushCriteria(new RequestCriteria($request));
        $this->clienteRepository->pushCriteria(new LimitOffsetCriteria($request));
        $clientes = $this->clienteRepository->all();

        return $this->sendResponse($clientes->toArray(), 'Clientes retrieved com sucesso');
    }

    /**
     * Store a newly created Cliente in storage.
     * POST /clientes
     *
     * @param CreateClienteAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateClienteAPIRequest $request)
    {
        $input = $request->all();

        $clientes = $this->clienteRepository->create($input);

        return $this->sendResponse($clientes->toArray(), 'Cliente salvo com sucesso');
    }

    /**
     * Display the specified Cliente.
     * GET|HEAD /clientes/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cliente = $this->clienteRepository->findWithoutFail($id);

        if (empty($cliente)) {
            return $this->sendError('Cliente não encontrado');
        }

        return $this->sendResponse($cliente->toArray(), 'Cliente retrieved com sucesso');
    }

    /**
     * Update the specified Cliente in storage.
     * PUT/PATCH /clientes/{id}
     *
     * @param  int $id
     * @param UpdateClienteAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClienteAPIRequest $request)
    {
        $input = $request->all();

        $cliente = $this->clienteRepository->findWithoutFail($id);

        if (empty($cliente)) {
            return $this->sendError('Cliente não encontrado');
        }

        $cliente = $this->clienteRepository->update($input, $id);

        return $this->sendResponse($cliente->toArray(), 'Cliente atualizado com sucesso');
    }

    /**
     * Remove the specified Cliente from storage.
     * DELETE /clientes/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cliente = $this->clienteRepository->findWithoutFail($id);

        if (empty($cliente)) {
            return $this->sendError('Cliente não encontrado');
        }

        $cliente->delete();

        return $this->sendResponse($id, 'Cliente excluído com sucesso');
    }

    public function pagamento(CreateClienteAPIRequest $request)
    {
        $input = $request->all();

        $clientes = $this->clienteRepository->create($input);

        return PagSeguroModel::confirmaPagamento($clientes);
    }
}
