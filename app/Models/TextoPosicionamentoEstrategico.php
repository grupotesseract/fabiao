<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TextoPosicionamentoEstrategico
 * @package App\Models
 * @version August 9, 2018, 1:53 pm -03
 *
 * @property string texto_pergunta
 * @property string texto_resposta_1
 * @property string texto_resposta_2
 * @property string descritivo_resposta_1
 * @property string descritivo_resposta_2
 */
class TextoPosicionamentoEstrategico extends Model
{
    use SoftDeletes;

    public $table = 'texto_posicionamento_estrategicos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'texto_pergunta',
        'texto_resposta_1',
        'texto_resposta_2',
        'descritivo_resposta_1',
        'descritivo_resposta_2'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'texto_pergunta' => 'string',
        'texto_resposta_1' => 'string',
        'texto_resposta_2' => 'string',
        'descritivo_resposta_1' => 'string',
        'descritivo_resposta_2' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'texto_pergunta' => 'required',
        'texto_resposta_1' => 'required',
        'texto_resposta_2' => 'required',
        'descritivo_resposta_1' => 'required',
        'descritivo_resposta_2' => 'required'
    ];

    
}
