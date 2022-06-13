<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // REGRAS DE VALIDACAO FORM

use App\Http\Requests\ValidaSetorForm; // VALIDA OS CAMPOS DE CADASTRO E UPDADE DO SETOR

use App\Repositories\Eloquent\SetorRepository;  // REGRAS DE NEGOCIOS

use App\Models\Setor;

class SetorController extends Controller
{
    public function create(){
        return view('setor.cadastro');
    }

    // METODO DE LISTAR
    public function gerenciar(SetorRepository $model){
        $setors = $model->listAtivos();
        return view('/setor/gerenciar',['setors' => $setors]);
    }

    // MEDOTO DE SALVA
    public function store(ValidaSetorForm $request, SetorRepository $model)
    {  
        $data = $request->all();
        $model->store($data); // SALVA 
        return redirect('/setor/gerenciar')->with('msg', 'Setor criado com sucesso!');
    }

    // PASSA VALORES PARA EDIÇÃO NO FORMULARIO
    public function edit($id, SetorRepository $model)
    {
        $setor = $model->getById($id);
        if(!$setor){  // CASO O ID NAO EXISTA
            return redirect('/setor/gerenciar'); 
        }
        return view('setor.editar', ['setor' => $setor]); 
    }

    // METODO DE EDITAR
    public function update(ValidaSetorForm $request, SetorRepository $model)
    { 
        $data = $request->all();
        $model->update($request->id, $data);
        return redirect('/setor/gerenciar')->with('msg', 'Setor editado com sucesso!');
    }

    // PASSA VALORES PARA EDIÇÃO NO FORMULARIO
    public function deletar($id, SetorRepository $model)
    {    
        $setor = $model->getById($id);; // Recupera a chave primary do mode
        if(!$setor){  // CASO O ID NAO EXISTA
            return redirect('/setor/gerenciar'); 
        }
        return view('setor.delete', ['setor' => $setor]);
    }

    // METODO DE 'DELETE LOGICO' (STATUS = 0)
    public function delete(Request $request, SetorRepository $model)
    {
        $model->delete($request->id);
        return redirect('/setor/gerenciar')->with('msg', 'Setor removido com sucesso!');
    }

}
