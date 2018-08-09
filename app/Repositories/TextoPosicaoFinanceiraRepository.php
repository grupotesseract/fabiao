<?php

namespace App\Repositories;

use App\Models\TextoPosicaoFinanceira;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TextoPosicaoFinanceiraRepository
 * @package App\Repositories
 * @version August 9, 2018, 1:54 pm -03
 *
 * @method TextoPosicaoFinanceira findWithoutFail($id, $columns = ['*'])
 * @method TextoPosicaoFinanceira find($id, $columns = ['*'])
 * @method TextoPosicaoFinanceira first($columns = ['*'])
*/
class TextoPosicaoFinanceiraRepository extends BaseRepository
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
        return TextoPosicaoFinanceira::class;
    }
}
