<?php

namespace App\Http\Controllers;

use App\Models\TextosCubo;
use App\DataTables\TextosCuboDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTextosCuboRequest;
use App\Http\Requests\UpdateTextosCuboRequest;
use App\Repositories\TextosCuboRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TextosCuboController extends AppBaseController
{
    /** @var  TextosCuboRepository */
    private $textosCuboRepository;

    public function __construct(TextosCuboRepository $textosCuboRepo)
    {
        $this->textosCuboRepository = $textosCuboRepo;
    }

    /**
     * Display a listing of the TextosCubo.
     *
     * @param TextosCuboDataTable $textosCuboDataTable
     * @return Response
     */
    public function index(TextosCuboDataTable $textosCuboDataTable)
    {
        return $textosCuboDataTable->render('textos_cubos.index');
    }

    /**
     * Retorna Listagem de Textos do Cubo
     *
     * @return Response
     */
    public function textosCubo()
    {
    	return response(TextosCubo::get());
    }

    /**
     * Show the form for creating a new TextosCubo.
     *
     * @return Response
     */
    public function create()
    {
        return view('textos_cubos.create');
    }

    /**
     * Store a newly created TextosCubo in storage.
     *
     * @param CreateTextosCuboRequest $request
     *
     * @return Response
     */
    public function store(CreateTextosCuboRequest $request)
    {
        $input = $request->all();

        $textosCubo = $this->textosCuboRepository->create($input);

        Flash::success('Textos Cubo saved successfully.');

        return redirect(route('textosCubos.index'));
    }

    /**
     * Display the specified TextosCubo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $textosCubo = $this->textosCuboRepository->findWithoutFail($id);

        if (empty($textosCubo)) {
            Flash::error('Textos Cubo not found');

            return redirect(route('textosCubos.index'));
        }

        return view('textos_cubos.show')->with('textosCubo', $textosCubo);
    }

    /**
     * Show the form for editing the specified TextosCubo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $textosCubo = $this->textosCuboRepository->findWithoutFail($id);

        if (empty($textosCubo)) {
            Flash::error('Textos Cubo not found');

            return redirect(route('textosCubos.index'));
        }

        return view('textos_cubos.edit')->with('textosCubo', $textosCubo);
    }

    /**
     * Update the specified TextosCubo in storage.
     *
     * @param  int              $id
     * @param UpdateTextosCuboRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTextosCuboRequest $request)
    {
        $textosCubo = $this->textosCuboRepository->findWithoutFail($id);

        if (empty($textosCubo)) {
            Flash::error('Textos Cubo not found');

            return redirect(route('textosCubos.index'));
        }

        $textosCubo = $this->textosCuboRepository->update($request->all(), $id);

        Flash::success('Textos Cubo updated successfully.');

        return redirect(route('textosCubos.index'));
    }

    /**
     * Remove the specified TextosCubo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $textosCubo = $this->textosCuboRepository->findWithoutFail($id);

        if (empty($textosCubo)) {
            Flash::error('Textos Cubo not found');

            return redirect(route('textosCubos.index'));
        }

        $this->textosCuboRepository->delete($id);

        Flash::success('Textos Cubo deleted successfully.');

        return redirect(route('textosCubos.index'));
    }
}
