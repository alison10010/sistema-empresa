<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setor;

class SetorController extends Controller
{
    public function create(){
        return view('setor.cadastro');
    }

    // METODO DE LISTAR
    public function gerenciar(){

        $setors = Setor::where([['status', '=', 1]])->get(); // PEGA TODOS OS REGISTROS ATIVO DO BD DA TABELA SETOR

        return view('/setor/gerenciar',['setors' => $setors]);
    }

    // MEDOTO DE SALVA
    public function store(Request $request){
       
        $setor = new Setor;
        $setor->nome = $request->nome;
        $setor->descricao = $request->descricao;
        $setor->status = 1;
        $setor->save();  // SALVA NO BD

        return redirect('/setor/gerenciar')->with('msg', 'Setor criado com sucesso!'); // REDIRECIONA PARA A HOME COM MSG

    }

    // PASSA VALORES PARA EDIÇÃO NO FORMULARIO
    public function edit($id){
        
        $setor = Setor::find($id); // Recupera a chave primary do model

        if(!$setor){  // CASO O ID NAO EXISTA
            return redirect('/setor/gerenciar'); 
        }

        return view('setor.editar', ['setor' => $setor]); // PASSANDO AS VARIAVEIS
    }

    // METODO DE EDITAR
    public function update(Request $request){
        
        $data = $request->all();

        $setor = Setor::findOrFail($request->id)->update($data); // ATUALIZA TODOS OS DADOS DO SETOR (MODIFICAR NO MODEL TBÉM)

        return redirect('/setor/gerenciar')->with('msg', 'Setor editado com sucesso!'); // REDIRECIONA PARA A LISTA COM MSG

    }

    // PASSA VALORES PARA EDIÇÃO NO FORMULARIO
    public function deletar($id){
        
        $setor = Setor::find($id); // Recupera a chave primary do model

        if(!$setor){  // CASO O ID NAO EXISTA
            return redirect('/setor/gerenciar'); 
        }

        return view('setor.delete', ['setor' => $setor]); // PASSANDO AS VARIAVEIS
    }

    // METODO DE 'DELETE LOGICO' DO SETOR (MUDANDO O STATUS DO SETOR)
    public function delete(Request $request){
        
        $data = $request->all(); 

        $setor = Setor::findOrFail($request->id)->update($data); // ATUALIZA TODOS OS DADOS DO SETOR (MODIFICAR NO MODEL TBÉM)

        return redirect('/setor/gerenciar')->with('msg', 'Setor removido com sucesso!'); // REDIRECIONA PARA A LISTA COM MSG

    }

}
