<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TextoEntrada
 * @package App\Models
 * @version August 9, 2018, 1:46 pm -03
 *
 * @property string cabecalho
 * @property string rodape
 */
class TextoEntrada extends Model
{
    use SoftDeletes;

    public $table = 'texto_entradas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'cabecalho',
        'rodape'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cabecalho' => 'string',
        'rodape' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cabecalho' => 'required',
        'rodape' => 'required'
    ];

    
}
