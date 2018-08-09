<?php

namespace App\Http\Controllers;

use App\DataTables\TextoExposicaoACriseDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTextoExposicaoACriseRequest;
use App\Http\Requests\UpdateTextoExposicaoACriseRequest;
use App\Repositories\TextoExposicaoACriseRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TextoExposicaoACriseController extends AppBaseController
{
    /** @var  TextoExposicaoACriseRepository */
    private $textoExposicaoACriseRepository;

    public function __construct(TextoExposicaoACriseRepository $textoExposicaoACriseRepo)
    {
        $this->textoExposicaoACriseRepository = $textoExposicaoACriseRepo;
    }

    /**
     * Display a listing of the TextoExposicaoACrise.
     *
     * @param TextoExposicaoACriseDataTable $textoExposicaoACriseDataTable
     * @return Response
     */
    public function index(TextoExposicaoACriseDataTable $textoExposicaoACriseDataTable)
    {
        return $textoExposicaoACriseDataTable->render('texto_exposicao_a_crises.index');
    }

    /**
     * Show the form for creating a new TextoExposicaoACrise.
     *
     * @return Response
     */
    public function create()
    {
        return view('texto_exposicao_a_crises.create');
    }

    /**
     * Store a newly created TextoExposicaoACrise in storage.
     *
     * @param CreateTextoExposicaoACriseRequest $request
     *
     * @return Response
     */
    public function store(CreateTextoExposicaoACriseRequest $request)
    {
        $input = $request->all();

        $textoExposicaoACrise = $this->textoExposicaoACriseRepository->create($input);

        Flash::success('Texto Exposicao A Crise saved successfully.');

        return redirect(route('textoExposicaoACrises.index'));
    }

    /**
     * Display the specified TextoExposicaoACrise.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $textoExposicaoACrise = $this->textoExposicaoACriseRepository->findWithoutFail($id);

        if (empty($textoExposicaoACrise)) {
            Flash::error('Texto Exposicao A Crise not found');

            return redirect(route('textoExposicaoACrises.index'));
        }

        return view('texto_exposicao_a_crises.show')->with('textoExposicaoACrise', $textoExposicaoACrise);
    }

    /**
     * Show the form for editing the specified TextoExposicaoACrise.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $textoExposicaoACrise = $this->textoExposicaoACriseRepository->findWithoutFail($id);

        if (empty($textoExposicaoACrise)) {
            Flash::error('Texto Exposicao A Crise not found');

            return redirect(route('textoExposicaoACrises.index'));
        }

        return view('texto_exposicao_a_crises.edit')->with('textoExposicaoACrise', $textoExposicaoACrise);
    }

    /**
     * Update the specified TextoExposicaoACrise in storage.
     *
     * @param  int              $id
     * @param UpdateTextoExposicaoACriseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTextoExposicaoACriseRequest $request)
    {
        $textoExposicaoACrise = $this->textoExposicaoACriseRepository->findWithoutFail($id);

        if (empty($textoExposicaoACrise)) {
            Flash::error('Texto Exposicao A Crise not found');

            return redirect(route('textoExposicaoACrises.index'));
        }

        $textoExposicaoACrise = $this->textoExposicaoACriseRepository->update($request->all(), $id);

        Flash::success('Texto Exposicao A Crise updated successfully.');

        return redirect(route('textoExposicaoACrises.index'));
    }

    /**
     * Remove the specified TextoExposicaoACrise from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $textoExposicaoACrise = $this->textoExposicaoACriseRepository->findWithoutFail($id);

        if (empty($textoExposicaoACrise)) {
            Flash::error('Texto Exposicao A Crise not found');

            return redirect(route('textoExposicaoACrises.index'));
        }

        $this->textoExposicaoACriseRepository->delete($id);

        Flash::success('Texto Exposicao A Crise deleted successfully.');

        return redirect(route('textoExposicaoACrises.index'));
    }
}
