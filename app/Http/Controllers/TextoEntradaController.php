<?php

namespace App\Http\Controllers;

use App\DataTables\TextoEntradaDataTable;
use App\Models\TextoEntrada;
use App\Http\Requests;
use App\Http\Requests\CreateTextoEntradaRequest;
use App\Http\Requests\UpdateTextoEntradaRequest;
use App\Repositories\TextoEntradaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TextoEntradaController extends AppBaseController
{
    /** @var  TextoEntradaRepository */
    private $textoEntradaRepository;

    public function __construct(TextoEntradaRepository $textoEntradaRepo)
    {
        $this->textoEntradaRepository = $textoEntradaRepo;
    }

    /**
     * Display a listing of the TextoEntrada.
     *
     * @param TextoEntradaDataTable $textoEntradaDataTable
     * @return Response
     */
    public function index(TextoEntradaDataTable $textoEntradaDataTable)
    {
        return $textoEntradaDataTable->render('texto_entradas.index');
    }

    /**
     * Retorna Listagem de Textos de Entrada
     *
     * @return Response
     */
    public function textoEntrada()
    {
    	return response(TextoEntrada::get());
    }

    /**
     * Show the form for creating a new TextoEntrada.
     *
     * @return Response
     */
    public function create()
    {
        return view('texto_entradas.create');
    }

    /**
     * Store a newly created TextoEntrada in storage.
     *
     * @param CreateTextoEntradaRequest $request
     *
     * @return Response
     */
    public function store(CreateTextoEntradaRequest $request)
    {
        $input = $request->all();

        $textoEntrada = $this->textoEntradaRepository->create($input);

        Flash::success('Texto Entrada saved successfully.');

        return redirect(route('textoEntradas.index'));
    }

    /**
     * Display the specified TextoEntrada.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $textoEntrada = $this->textoEntradaRepository->findWithoutFail($id);

        if (empty($textoEntrada)) {
            Flash::error('Texto Entrada not found');

            return redirect(route('textoEntradas.index'));
        }

        return view('texto_entradas.show')->with('textoEntrada', $textoEntrada);
    }

    /**
     * Show the form for editing the specified TextoEntrada.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $textoEntrada = $this->textoEntradaRepository->findWithoutFail($id);

        if (empty($textoEntrada)) {
            Flash::error('Texto Entrada not found');

            return redirect(route('textoEntradas.index'));
        }

        return view('texto_entradas.edit')->with('textoEntrada', $textoEntrada);
    }

    /**
     * Update the specified TextoEntrada in storage.
     *
     * @param  int              $id
     * @param UpdateTextoEntradaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTextoEntradaRequest $request)
    {
        $textoEntrada = $this->textoEntradaRepository->findWithoutFail($id);

        if (empty($textoEntrada)) {
            Flash::error('Texto Entrada not found');

            return redirect(route('textoEntradas.index'));
        }

        $textoEntrada = $this->textoEntradaRepository->update($request->all(), $id);

        Flash::success('Texto Entrada updated successfully.');

        return redirect(route('textoEntradas.index'));
    }

    /**
     * Remove the specified TextoEntrada from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $textoEntrada = $this->textoEntradaRepository->findWithoutFail($id);

        if (empty($textoEntrada)) {
            Flash::error('Texto Entrada not found');

            return redirect(route('textoEntradas.index'));
        }

        $this->textoEntradaRepository->delete($id);

        Flash::success('Texto Entrada deleted successfully.');

        return redirect(route('textoEntradas.index'));
    }
}
