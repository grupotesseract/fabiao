<?php

namespace App\Repositories;

use App\Models\TextosIniciativa;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TextosIniciativaRepository
 * @package App\Repositories
 * @version August 9, 2018, 2:11 pm -03
 *
 * @method TextosIniciativa findWithoutFail($id, $columns = ['*'])
 * @method TextosIniciativa find($id, $columns = ['*'])
 * @method TextosIniciativa first($columns = ['*'])
*/
class TextosIniciativaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descritivo',
        'descritivo_pai',
        'numero',
        'prioridade',
        'textos_cubos_id',
        'path_pdf'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TextosIniciativa::class;
    }
}
