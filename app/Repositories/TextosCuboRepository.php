<?php

namespace App\Repositories;

use App\Models\TextosCubo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TextosCuboRepository
 * @package App\Repositories
 * @version August 9, 2018, 1:57 pm -03
 *
 * @method TextosCubo findWithoutFail($id, $columns = ['*'])
 * @method TextosCubo find($id, $columns = ['*'])
 * @method TextosCubo first($columns = ['*'])
*/
class TextosCuboRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descritivo',
        'resposta_ec',
        'resposta_pe',
        'resposta_pf',
        'valor_compra'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TextosCubo::class;
    }
}
