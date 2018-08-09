<?php

namespace App\Repositories;

use App\Models\TextoEntrada;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TextoEntradaRepository
 * @package App\Repositories
 * @version August 9, 2018, 1:46 pm -03
 *
 * @method TextoEntrada findWithoutFail($id, $columns = ['*'])
 * @method TextoEntrada find($id, $columns = ['*'])
 * @method TextoEntrada first($columns = ['*'])
*/
class TextoEntradaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cabecalho',
        'rodape'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TextoEntrada::class;
    }
}
