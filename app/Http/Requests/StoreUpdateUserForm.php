<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserForm extends FormRequest
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

    // VALIDACAO DOS DADOS DO FROM DE CADASTRO DE USER
    public function rules()
    {
        $id = $this->id ?? ''; // PEGA O ID QUE ESTÁ SENDO EDITADO

        $rules = [
            'name' => 'required|string|max:100|min:3', 
            'email' => "required|email|unique:users,email,{$id},id", // O EMAIL PODE SER ALTERADO POR UM Q NAO EXITE OU MANTER O MESMO
            'password' => ['required', 'min:8', 'max:15']
        ];

        if($this->method('PUT')){  // SE FOR DO TIPO ( PUT ) MUDA AS REGRAS
            $rules['password'] = [
                'password' => ['nullable', 'min:8', 'max:15']
            ];
        }
        return $rules;
    }
}
