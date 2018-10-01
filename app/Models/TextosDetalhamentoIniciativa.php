<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TextosDetalhamentoIniciativa
 * @package App\Models
 * @version August 9, 2018, 2:13 pm -03
 *
 * @property string descritivo
 * @property integer texto_iniciativa_id
 */
class TextosDetalhamentoIniciativa extends Model
{
    use SoftDeletes;

    public $table = 'textos_detalhamento_iniciativas';
    
    protected $hidden = ['created_at', 'deleted_at', 'updated_at'];

    protected $dates = ['deleted_at'];


    public $fillable = [
        'descritivo',
        'texto_iniciativa_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descritivo' => 'string',
        'texto_iniciativa_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descritivo' => 'required',
    ];
}
