<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TextosIniciativa
 * @package App\Models
 * @version August 9, 2018, 2:11 pm -03
 *
 * @property string descritivo
 * @property string descritivo_pai
 * @property integer numero
 * @property integer prioridade
 * @property integer textos_cubos_id
 */
class TextosIniciativa extends Model
{
    use SoftDeletes;

    public $table = 'textos_iniciativas';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'descritivo',
        'descritivo_pai',
        'numero',
        'prioridade',
        'textos_cubos_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descritivo' => 'string',
        'descritivo_pai' => 'string',
        'numero' => 'integer',
        'prioridade' => 'integer',
        'textos_cubos_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descritivo' => 'required',
        'descritivo_pai' => 'required',
        'numero' => 'required',
        'prioridade' => 'required',
        'textos_cubos_id' => 'required',
    ];

    /**
     * relacionamento p/ retornar cubo
     *
     * @return void
     */
    public function filhos()
    {
    	return $this->hasMany('App\Models\TextosDetalhamentoIniciativa', 'id');
    }
    

    
}
