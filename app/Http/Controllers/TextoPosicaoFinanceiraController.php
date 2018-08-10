<?php

namespace App\Http\Controllers;

use App\Models\TextoPosicaoFinanceira;
use App\DataTables\TextoPosicaoFinanceiraDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTextoPosicaoFinanceiraRequest;
use App\Http\Requests\UpdateTextoPosicaoFinanceiraRequest;
use App\Repositories\TextoPosicaoFinanceiraRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TextoPosicaoFinanceiraController extends AppBaseController
{
    /** @var  TextoPosicaoFinanceiraRepository */
    private $textoPosicaoFinanceiraRepository;

    public function __construct(TextoPosicaoFinanceiraRepository $textoPosicaoFinanceiraRepo)
    {
        $this->textoPosicaoFinanceiraRepository = $textoPosicaoFinanceiraRepo;
    }

    /**
     * Display a listing of the TextoPosicaoFinanceira.
     *
     * @param TextoPosicaoFinanceiraDataTable $textoPosicaoFinanceiraDataTable
     * @return Response
     */
    public function index(TextoPosicaoFinanceiraDataTable $textoPosicaoFinanceiraDataTable)
    {
        return $textoPosicaoFinanceiraDataTable->render('texto_posicao_financeiras.index');
    }

    /**
     * Retorna Listagem de Textos de Posição Financeira
     *
     * @return Response
     */
    public function textoPosicaoFinanceira()
    {
    	return response(TextoPosicaoFinanceira::get());
    }

    /**
     * Show the form for creating a new TextoPosicaoFinanceira.
     *
     * @return Response
     */
    public function create()
    {
        return view('texto_posicao_financeiras.create');
    }

    /**
     * Store a newly created TextoPosicaoFinanceira in storage.
     *
     * @param CreateTextoPosicaoFinanceiraRequest $request
     *
     * @return Response
     */
    public function store(CreateTextoPosicaoFinanceiraRequest $request)
    {
        $input = $request->all();

        $textoPosicaoFinanceira = $this->textoPosicaoFinanceiraRepository->create($input);

        Flash::success('Texto Posicao Financeira saved successfully.');

        return redirect(route('textoPosicaoFinanceiras.index'));
    }

    /**
     * Display the specified TextoPosicaoFinanceira.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $textoPosicaoFinanceira = $this->textoPosicaoFinanceiraRepository->findWithoutFail($id);

        if (empty($textoPosicaoFinanceira)) {
            Flash::error('Texto Posicao Financeira not found');

            return redirect(route('textoPosicaoFinanceiras.index'));
        }

        return view('texto_posicao_financeiras.show')->with('textoPosicaoFinanceira', $textoPosicaoFinanceira);
    }

    /**
     * Show the form for editing the specified TextoPosicaoFinanceira.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $textoPosicaoFinanceira = $this->textoPosicaoFinanceiraRepository->findWithoutFail($id);

        if (empty($textoPosicaoFinanceira)) {
            Flash::error('Texto Posicao Financeira not found');

            return redirect(route('textoPosicaoFinanceiras.index'));
        }

        return view('texto_posicao_financeiras.edit')->with('textoPosicaoFinanceira', $textoPosicaoFinanceira);
    }

    /**
     * Update the specified TextoPosicaoFinanceira in storage.
     *
     * @param  int              $id
     * @param UpdateTextoPosicaoFinanceiraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTextoPosicaoFinanceiraRequest $request)
    {
        $textoPosicaoFinanceira = $this->textoPosicaoFinanceiraRepository->findWithoutFail($id);

        if (empty($textoPosicaoFinanceira)) {
            Flash::error('Texto Posicao Financeira not found');

            return redirect(route('textoPosicaoFinanceiras.index'));
        }

        $textoPosicaoFinanceira = $this->textoPosicaoFinanceiraRepository->update($request->all(), $id);

        Flash::success('Texto Posicao Financeira updated successfully.');

        return redirect(route('textoPosicaoFinanceiras.index'));
    }

    /**
     * Remove the specified TextoPosicaoFinanceira from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $textoPosicaoFinanceira = $this->textoPosicaoFinanceiraRepository->findWithoutFail($id);

        if (empty($textoPosicaoFinanceira)) {
            Flash::error('Texto Posicao Financeira not found');

            return redirect(route('textoPosicaoFinanceiras.index'));
        }

        $this->textoPosicaoFinanceiraRepository->delete($id);

        Flash::success('Texto Posicao Financeira deleted successfully.');

        return redirect(route('textoPosicaoFinanceiras.index'));
    }
}
