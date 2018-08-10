<?php

namespace App\Http\Controllers;

use App\Models\TextosIniciativa;
use App\DataTables\TextosIniciativaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTextosIniciativaRequest;
use App\Http\Requests\UpdateTextosIniciativaRequest;
use App\Repositories\TextosIniciativaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TextosIniciativaController extends AppBaseController
{
    /** @var  TextosIniciativaRepository */
    private $textosIniciativaRepository;

    public function __construct(TextosIniciativaRepository $textosIniciativaRepo)
    {
        $this->textosIniciativaRepository = $textosIniciativaRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the TextosIniciativa.
     *
     * @param TextosIniciativaDataTable $textosIniciativaDataTable
     * @return Response
     */
    public function index(TextosIniciativaDataTable $textosIniciativaDataTable)
    {
        return $textosIniciativaDataTable->render('textos_iniciativas.index');
    }

    /**
     * Retorna Listagem de Textos de Iniciativa
     *
     * @return Response
     */
    public function textosIniciativa()
    {
    	return response(TextosIniciativa::get());
    }

    /**
     * Show the form for creating a new TextosIniciativa.
     *
     * @return Response
     */
    public function create()
    {
        return view('textos_iniciativas.create');
    }

    /**
     * Store a newly created TextosIniciativa in storage.
     *
     * @param CreateTextosIniciativaRequest $request
     *
     * @return Response
     */
    public function store(CreateTextosIniciativaRequest $request)
    {
        $input = $request->all();

        $textosIniciativa = $this->textosIniciativaRepository->create($input);

        Flash::success('Textos Iniciativa saved successfully.');

        return redirect(route('textosIniciativas.index'));
    }

    /**
     * Display the specified TextosIniciativa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $textosIniciativa = $this->textosIniciativaRepository->findWithoutFail($id);

        if (empty($textosIniciativa)) {
            Flash::error('Textos Iniciativa not found');

            return redirect(route('textosIniciativas.index'));
        }

        return view('textos_iniciativas.show')->with('textosIniciativa', $textosIniciativa);
    }

    /**
     * Show the form for editing the specified TextosIniciativa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $textosIniciativa = $this->textosIniciativaRepository->findWithoutFail($id);

        if (empty($textosIniciativa)) {
            Flash::error('Textos Iniciativa not found');

            return redirect(route('textosIniciativas.index'));
        }

        return view('textos_iniciativas.edit')->with('textosIniciativa', $textosIniciativa);
    }

    /**
     * Update the specified TextosIniciativa in storage.
     *
     * @param  int              $id
     * @param UpdateTextosIniciativaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTextosIniciativaRequest $request)
    {
        $textosIniciativa = $this->textosIniciativaRepository->findWithoutFail($id);

        if (empty($textosIniciativa)) {
            Flash::error('Textos Iniciativa not found');

            return redirect(route('textosIniciativas.index'));
        }

        $textosIniciativa = $this->textosIniciativaRepository->update($request->all(), $id);

        Flash::success('Textos Iniciativa updated successfully.');

        return redirect(route('textosIniciativas.index'));
    }

    /**
     * Remove the specified TextosIniciativa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $textosIniciativa = $this->textosIniciativaRepository->findWithoutFail($id);

        if (empty($textosIniciativa)) {
            Flash::error('Textos Iniciativa not found');

            return redirect(route('textosIniciativas.index'));
        }

        $this->textosIniciativaRepository->delete($id);

        Flash::success('Textos Iniciativa deleted successfully.');

        return redirect(route('textosIniciativas.index'));
    }
}
