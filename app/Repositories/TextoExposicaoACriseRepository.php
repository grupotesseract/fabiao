<?php

namespace App\Repositories;

use App\Models\TextoExposicaoACrise;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TextoExposicaoACriseRepository
 * @package App\Repositories
 * @version August 9, 2018, 1:49 pm -03
 *
 * @method TextoExposicaoACrise findWithoutFail($id, $columns = ['*'])
 * @method TextoExposicaoACrise find($id, $columns = ['*'])
 * @method TextoExposicaoACrise first($columns = ['*'])
*/
class TextoExposicaoACriseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'texto_pergunta',
        'texto_resposta_1',
        'texto_resposta_2',
        'descritivo_resposta_1',
        'descritivo_resposta_2'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TextoExposicaoACrise::class;
    }
}
