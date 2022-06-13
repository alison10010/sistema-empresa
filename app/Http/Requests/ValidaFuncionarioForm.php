<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidaFuncionarioForm extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules() 
    {
        $id = $this->id ?? ''; // PEGA O ID QUE ESTÁ SENDO EDITADO

        $rules = [
            'nome' => 'required|string|max:100|min:3',             
            'cpf' => "required|max:11|min:11|unique:funcionarios,cpf,{$id},id",
            'setor_id' => 'required', 
            'cargo_id' => 'required',
        ];


        /*
        if($this->method('PUT')){  
            $rules = [ 
                'nome' => 'required|string|max:100|min:3'
            ];
        }
        */
        
        return $rules;
    }
}
