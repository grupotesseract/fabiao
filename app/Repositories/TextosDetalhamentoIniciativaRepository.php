<?php

namespace App\Repositories;

use App\Models\TextosDetalhamentoIniciativa;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TextosDetalhamentoIniciativaRepository
 * @package App\Repositories
 * @version August 9, 2018, 2:13 pm -03
 *
 * @method TextosDetalhamentoIniciativa findWithoutFail($id, $columns = ['*'])
 * @method TextosDetalhamentoIniciativa find($id, $columns = ['*'])
 * @method TextosDetalhamentoIniciativa first($columns = ['*'])
*/
class TextosDetalhamentoIniciativaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descritivo',
        'texto_iniciativa_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TextosDetalhamentoIniciativa::class;
    }
}
