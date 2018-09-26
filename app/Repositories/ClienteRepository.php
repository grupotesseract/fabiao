<?php

namespace App\Repositories;

use App\Models\Cliente;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClienteRepository
 * @package App\Repositories
 * @version September 21, 2018, 3:13 pm -03
 *
 * @method Cliente findWithoutFail($id, $columns = ['*'])
 * @method Cliente find($id, $columns = ['*'])
 * @method Cliente first($columns = ['*'])
*/
class ClienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cep',
        'endereco',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'email',
        'nome',
        'cpf',
        'nascimento',
        'itemId',
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cliente::class;
    }
}
