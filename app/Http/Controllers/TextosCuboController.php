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
Use Illuminate\Support\Facades\Storage;

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
     * Endpoint para caminhos de Anexos
     *
     * @return Response
     */
    public function anexos($id)
    {
        $anexo =  'public/' . TextosCubo::find($id)->path_pdf;

    	return Storage::download($anexo);
    }

    /**
     * Retorna Listagem de Textos do Cubo
     *
     * @return Response
     */
    public function textosCubo()
    {
    	return response(TextosCubo::with('textosIniciativa')->get());
    }

    /**
     * Retorna Listagem de resposta do Cubo
     *
     * @param tipo_resposta onde 
     * crise = reposta para exposição a crise,
     * estrategico = reposta para posicionamento estrategico
     * posicao = reposta para posição financeira
     *
     * @return Response
     */
    public function respostaCubo($tipo_resposta = 'crise')
    {
	$param_response = [
		'crise'       => 'resposta_ec',
		'estrategico' => 'resposta_pe',
		'posicao'     => 'resposta_pf',
	];

	try {
		$resposta = $param_response[$tipo_resposta];

		return response(TextosCubo::get([$resposta]));
		
	} catch (\Throwable $e) {
		return redirect()->route('resposta_cubo');
	}
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

        $pdf = $request->file('path_pdf');

        $pdf_original_name = $pdf->getClientOriginalName();

        $pdf_path = $pdf->storeAs('public', $pdf_original_name);

        $input['path_pdf'] = $pdf_original_name;

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

        $input = $request->all();

        $pdf = $request->file('path_pdf');

        $pdf_original_name = $pdf->getClientOriginalName();

        $pdf_path = $pdf->storeAs('public', $pdf_original_name);

        $input['path_pdf'] = $pdf_original_name;

        $textosCubo = $this->textosCuboRepository->update($input, $id);

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
