<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidaSetorForm extends FormRequest
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


    public function rules()
    {
        $id = $this->id ?? ''; // PEGA O ID QUE ESTÁ SENDO EDITADO

        $rules = [
            'nome' => 'required|string|max:100|min:2', 
            'descricao' => ['required', 'min:6']
        ];
        
        return $rules;
    }
}
