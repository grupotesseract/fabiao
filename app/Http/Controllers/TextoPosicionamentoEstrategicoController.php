<?php

namespace App\Http\Controllers;

use App\DataTables\TextoPosicionamentoEstrategicoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTextoPosicionamentoEstrategicoRequest;
use App\Http\Requests\UpdateTextoPosicionamentoEstrategicoRequest;
use App\Repositories\TextoPosicionamentoEstrategicoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TextoPosicionamentoEstrategicoController extends AppBaseController
{
    /** @var  TextoPosicionamentoEstrategicoRepository */
    private $textoPosicionamentoEstrategicoRepository;

    public function __construct(TextoPosicionamentoEstrategicoRepository $textoPosicionamentoEstrategicoRepo)
    {
        $this->textoPosicionamentoEstrategicoRepository = $textoPosicionamentoEstrategicoRepo;
    }

    /**
     * Display a listing of the TextoPosicionamentoEstrategico.
     *
     * @param TextoPosicionamentoEstrategicoDataTable $textoPosicionamentoEstrategicoDataTable
     * @return Response
     */
    public function index(TextoPosicionamentoEstrategicoDataTable $textoPosicionamentoEstrategicoDataTable)
    {
        return $textoPosicionamentoEstrategicoDataTable->render('texto_posicionamento_estrategicos.index');
    }

    /**
     * Show the form for creating a new TextoPosicionamentoEstrategico.
     *
     * @return Response
     */
    public function create()
    {
        return view('texto_posicionamento_estrategicos.create');
    }

    /**
     * Store a newly created TextoPosicionamentoEstrategico in storage.
     *
     * @param CreateTextoPosicionamentoEstrategicoRequest $request
     *
     * @return Response
     */
    public function store(CreateTextoPosicionamentoEstrategicoRequest $request)
    {
        $input = $request->all();

        $textoPosicionamentoEstrategico = $this->textoPosicionamentoEstrategicoRepository->create($input);

        Flash::success('Texto Posicionamento Estrategico salvo com sucesso.');

        return redirect(route('textoPosicionamentoEstrategicos.index'));
    }

    /**
     * Display the specified TextoPosicionamentoEstrategico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $textoPosicionamentoEstrategico = $this->textoPosicionamentoEstrategicoRepository->findWithoutFail($id);

        if (empty($textoPosicionamentoEstrategico)) {
            Flash::error('Texto Posicionamento Estrategico não encontrado');

            return redirect(route('textoPosicionamentoEstrategicos.index'));
        }

        return view('texto_posicionamento_estrategicos.show')->with('textoPosicionamentoEstrategico', $textoPosicionamentoEstrategico);
    }

    /**
     * Show the form for editing the specified TextoPosicionamentoEstrategico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $textoPosicionamentoEstrategico = $this->textoPosicionamentoEstrategicoRepository->findWithoutFail($id);

        if (empty($textoPosicionamentoEstrategico)) {
            Flash::error('Texto Posicionamento Estrategico não encontrado');

            return redirect(route('textoPosicionamentoEstrategicos.index'));
        }

        return view('texto_posicionamento_estrategicos.edit')->with('textoPosicionamentoEstrategico', $textoPosicionamentoEstrategico);
    }

    /**
     * Update the specified TextoPosicionamentoEstrategico in storage.
     *
     * @param  int              $id
     * @param UpdateTextoPosicionamentoEstrategicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTextoPosicionamentoEstrategicoRequest $request)
    {
        $textoPosicionamentoEstrategico = $this->textoPosicionamentoEstrategicoRepository->findWithoutFail($id);

        if (empty($textoPosicionamentoEstrategico)) {
            Flash::error('Texto Posicionamento Estrategico não encontrado');

            return redirect(route('textoPosicionamentoEstrategicos.index'));
        }

        $textoPosicionamentoEstrategico = $this->textoPosicionamentoEstrategicoRepository->update($request->all(), $id);

        Flash::success('Texto Posicionamento Estrategico atualizado com sucesso.');

        return redirect(route('textoPosicionamentoEstrategicos.index'));
    }

    /**
     * Remove the specified TextoPosicionamentoEstrategico from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $textoPosicionamentoEstrategico = $this->textoPosicionamentoEstrategicoRepository->findWithoutFail($id);

        if (empty($textoPosicionamentoEstrategico)) {
            Flash::error('Texto Posicionamento Estrategico não encontrado');

            return redirect(route('textoPosicionamentoEstrategicos.index'));
        }

        $this->textoPosicionamentoEstrategicoRepository->delete($id);

        Flash::success('Texto Posicionamento Estrategico excluído com sucesso.');

        return redirect(route('textoPosicionamentoEstrategicos.index'));
    }
}
