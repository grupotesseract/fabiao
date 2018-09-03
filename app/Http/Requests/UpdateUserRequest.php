<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class UpdateUserRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
	$rules = User::$rules; 

	// Trocando regra de validação na marra em caso de update
	// pois usando a regra de unique o request quebra se o
	// e-mail do usuário não foi alterado no form 
	//
	// Usar apenas a regra 'exists' quebrará o request de criação de usuário
	// Então segura nessa gambi e vai
	$rules['email'] = preg_replace('/unique/', 'exists', $rules['email']);

        return $rules;
    }
}
