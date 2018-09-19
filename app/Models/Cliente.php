<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * @package App\Models
 * @version September 17, 2018, 1:27 pm -03
 *
 * @property string cep
 * @property string endereco
 * @property string numero
 * @property string bairro
 * @property string cidade
 * @property string estado
 * @property string email
 * @property string nome
 * @property string cpf
 * @property string nascimento
 */
class Cliente extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cep' => 'string',
        'endereco' => 'string',
        'numero' => 'string',
        'bairro' => 'string',
        'cidade' => 'string',
        'estado' => 'string',
        'email' => 'string',
        'nome' => 'string',
        'cpf' => 'string',
        'nascimento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cep' => 'required',
        'endereco' => 'required',
        'numero' => 'required',
        'bairro' => 'required',
        'cidade' => 'required',
        'estado' => 'required',
        'email' => 'required',
        'nome' => 'required',
        'cpf' => 'required',
        'nascimento' => 'required'
    ];

    
}
