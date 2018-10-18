<?php

namespace App\Http\Controllers;

use App\Models\TextosDetalhamentoIniciativa;
use App\Models\TextosIniciativa;
use App\DataTables\TextosDetalhamentoIniciativaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTextosDetalhamentoIniciativaRequest;
use App\Http\Requests\UpdateTextosDetalhamentoIniciativaRequest;
use App\Repositories\TextosDetalhamentoIniciativaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TextosDetalhamentoIniciativaController extends AppBaseController
{
    /** @var  TextosDetalhamentoIniciativaRepository */
    private $textosDetalhamentoIniciativaRepository;

    public function __construct(TextosDetalhamentoIniciativaRepository $textosDetalhamentoIniciativaRepo)
    {
        $this->textosDetalhamentoIniciativaRepository = $textosDetalhamentoIniciativaRepo;
    }

    /**
     * Display a listing of the TextosDetalhamentoIniciativa.
     *
     * @param TextosDetalhamentoIniciativaDataTable $textosDetalhamentoIniciativaDataTable
     * @return Response
     */
    public function index(TextosDetalhamentoIniciativaDataTable $textosDetalhamentoIniciativaDataTable)
    {
        return $textosDetalhamentoIniciativaDataTable->render('textos_detalhamento_iniciativas.index');
    }

    /**
     * Show the form for creating a new TextosDetalhamentoIniciativa.
     *
     * @return Response
     */
    public function create()
    {
        $textosIniciativa = TextosIniciativa::get();

        foreach ($textosIniciativa as $textoIniciativa) {
            $textoIniciativa->descritivo .= ' (' . $textoIniciativa->cubo->descritivo . ')';
        }

        return view('textos_detalhamento_iniciativas.create')->with(compact('textosIniciativa'));
    }

    /**
     * Store a newly created TextosDetalhamentoIniciativa in storage.
     *
     * @param CreateTextosDetalhamentoIniciativaRequest $request
     *
     * @return Response
     */
    public function store(CreateTextosDetalhamentoIniciativaRequest $request)
    {
        $input = $request->all();

        $textosDetalhamentoIniciativa = $this->textosDetalhamentoIniciativaRepository->create($input);

        Flash::success('Textos Detalhamento Iniciativa salvo com sucesso.');

        return redirect(route('textosDetalhamentoIniciativas.index'));
    }

    /**
     * Display the specified TextosDetalhamentoIniciativa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $textosDetalhamentoIniciativa = $this->textosDetalhamentoIniciativaRepository->findWithoutFail($id);

        if (empty($textosDetalhamentoIniciativa)) {
            Flash::error('Textos Detalhamento Iniciativa não encontrado');

            return redirect(route('textosDetalhamentoIniciativas.index'));
        }

        return view('textos_detalhamento_iniciativas.show')->with('textosDetalhamentoIniciativa', $textosDetalhamentoIniciativa);
    }

    /**
     * Show the form for editing the specified TextosDetalhamentoIniciativa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $textosDetalhamentoIniciativa = $this->textosDetalhamentoIniciativaRepository->findWithoutFail($id);

        $textosIniciativa = TextosIniciativa::get();

        foreach ($textosIniciativa as $textoIniciativa) {
            $textoIniciativa->descritivo .= ' (' . $textoIniciativa->cubo->descritivo . ')';
        }

        if (empty($textosDetalhamentoIniciativa)) {
            Flash::error('Textos Detalhamento Iniciativa não encontrado');

            return redirect(route('textosDetalhamentoIniciativas.index'));
        }

        return view('textos_detalhamento_iniciativas.edit')->with(compact('textosDetalhamentoIniciativa', 'textosIniciativa'));
    }

    /**
     * Update the specified TextosDetalhamentoIniciativa in storage.
     *
     * @param  int              $id
     * @param UpdateTextosDetalhamentoIniciativaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTextosDetalhamentoIniciativaRequest $request)
    {
        $textosDetalhamentoIniciativa = $this->textosDetalhamentoIniciativaRepository->findWithoutFail($id);

        if (empty($textosDetalhamentoIniciativa)) {
            Flash::error('Textos Detalhamento Iniciativa não encontrado');

            return redirect(route('textosDetalhamentoIniciativas.index'));
        }

        $textosDetalhamentoIniciativa = $this->textosDetalhamentoIniciativaRepository->update($request->all(), $id);

        Flash::success('Textos Detalhamento Iniciativa atualizado com sucesso.');

        return redirect(route('textosDetalhamentoIniciativas.index'));
    }

    /**
     * Remove the specified TextosDetalhamentoIniciativa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $textosDetalhamentoIniciativa = $this->textosDetalhamentoIniciativaRepository->findWithoutFail($id);

        if (empty($textosDetalhamentoIniciativa)) {
            Flash::error('Textos Detalhamento Iniciativa não encontrado');

            return redirect(route('textosDetalhamentoIniciativas.index'));
        }

        $this->textosDetalhamentoIniciativaRepository->delete($id);

        Flash::success('Textos Detalhamento Iniciativa excluído com sucesso.');

        return redirect(route('textosDetalhamentoIniciativas.index'));
    }
}
