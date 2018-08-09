<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TextosCubo
 * @package App\Models
 * @version August 9, 2018, 1:57 pm -03
 *
 * @property string descritivo
 * @property string resposta_ec
 * @property string resposta_pe
 * @property string resposta_pf
 * @property integer valor_compra
 */
class TextosCubo extends Model
{
    use SoftDeletes;

    public $table = 'textos_cubos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'descritivo',
        'resposta_ec',
        'resposta_pe',
        'resposta_pf',
        'valor_compra'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descritivo' => 'string',
        'resposta_ec' => 'string',
        'resposta_pe' => 'string',
        'resposta_pf' => 'string',
        'valor_compra' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descritivo' => 'required',
        'resposta_ec' => 'required',
        'resposta_pe' => 'required',
        'resposta_pf' => 'required',
        'valor_compra' => 'required'
    ];

    
}
