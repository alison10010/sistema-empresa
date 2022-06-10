<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setor; // USA PARA RELACIONAR AO SETOR

use App\Models\Cargo; // USA PARA RELACIONAR AO CARGO

use App\Models\Funcionario;

use App\Repositories\Eloquent\FuncionarioRepository; 

class FuncionarioController extends Controller{
    
    // RETONA A PAGE DE CADASTRO
    public function create(FuncionarioRepository $model)
    { 
        $setors = $model->setorAtivo();
        return view('/funcionario/cadastro',['setors' => $setors]); 
    } 
    
    // METODO DE LISTAR
    public function gerenciar(FuncionarioRepository $model)
    {
        $funcionarios = $model->listAtivos();
        return view('/funcionario/gerenciar',['funcionarios' => $funcionarios]);
    }

    // FUNCAO DE ACORDO COM O SETOR
    public function funcao($id, FuncionarioRepository $model)
    {
        $setor = request('id'); // PARAMETRO URL
        $funcaoSetor = $model->funcaoSetor($setor);
        return json_encode($funcaoSetor);
    }

    // MEDOTO DE SALVA
    public function store(Request $request, FuncionarioRepository $model)
    {
        $data = $request->all();
        $model->store($data);
        return redirect('/funcionario/gerenciar')->with('msg', 'Funcionario salvo com sucesso!');
    }

    // DETALHES DE FUNCIONARIO
    public function detalhes($id, FuncionarioRepository $model)
    {
        $id = request('id'); // PARAMETRO URL
        $funcionario = $model->detalhesFunc($id);
        return json_encode($funcionario); 
    }

    // VALORES NO FORMULARIO
    public function edit($id, FuncionarioRepository $model)
    {
        $funcionario = $model->getById($id);

        if(!$funcionario){  // CASO O ID NAO EXISTA
            return redirect('/funcionario/gerenciar'); 
        }
        $setors = $model->setorAtivo();

        return view('funcionario.editar', ['funcionario' => $funcionario, 'setors' => $setors]); // PASSANDO AS VARIAVEIS
    }

    // METODO DE EDITAR
    public function update(Request $request, FuncionarioRepository $model)
    {
        $data = $request->all();
        $model->update($request->id, $data);
        return redirect('/funcionario/gerenciar')->with('msg', 'Funcionario editado com sucesso!'); 
    }

    // PASSA VALORES PARA EDIÇÃO NO FORMULARIO
    public function deletar($id, FuncionarioRepository $model)
    {
        $funcionario = $model->getById($id); 

        if(!$funcionario){  // CASO O ID NAO EXISTA
            return redirect('/funcionario/gerenciar'); 
        }
        return view('funcionario.delete', ['funcionario' => $funcionario]); 
    }

    // METODO DE 'DELETE LOGICO' (STATUS = 0)
    public function delete(Request $request, FuncionarioRepository $model)
    {
        $model->delete($request->id);
        return redirect('/funcionario/gerenciar')->with('msg', 'Funcionario removido com sucesso!');
    }
  
}
