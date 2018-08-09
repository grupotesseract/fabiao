<?php

namespace App\Repositories;

use App\Models\TextoPosicionamentoEstrategico;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TextoPosicionamentoEstrategicoRepository
 * @package App\Repositories
 * @version August 9, 2018, 1:53 pm -03
 *
 * @method TextoPosicionamentoEstrategico findWithoutFail($id, $columns = ['*'])
 * @method TextoPosicionamentoEstrategico find($id, $columns = ['*'])
 * @method TextoPosicionamentoEstrategico first($columns = ['*'])
*/
class TextoPosicionamentoEstrategicoRepository extends BaseRepository
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
        return TextoPosicionamentoEstrategico::class;
    }
}
