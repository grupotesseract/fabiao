<?php

namespace App\Repositories;

use App\Models\Cliente;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClienteRepository
 * @package App\Repositories
 * @version September 17, 2018, 1:27 pm -03
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
        'nascimento'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cliente::class;
    }
}
