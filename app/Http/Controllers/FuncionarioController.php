<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setor; // USA A TABLE SETOR PARA RELACIONAR AO SETOR

use App\Models\Cargo; // USA A TABLE SETOR PARA RELACIONAR AO CARGO

use App\Models\Funcionario; // USA A TABLE SETOR PARA RELACIONAR AO FUNCIONARIO

class FuncionarioController extends Controller{
    
    // RETONA A PAGE DE CADASTRO
    public function create(){ 

        $setors = Setor::where([['status', '=', 1]])->orderBy('nome', 'ASC')->get(); // PEGA TODOS OS REGISTROS ATIVO DO BD DA TABELA SETOR

        return view('/funcionario/cadastro',['setors' => $setors]); 
    } 
    
    // METODO DE LISTAR
    public function gerenciar(){

        $funcionarios = Funcionario::where([['status', '=', 1]])->get(); // PEGA TODOS OS REGISTROS ATIVO DO BD DA TABELA SETOR

        return view('/funcionario/gerenciar',['funcionarios' => $funcionarios]);
    }

    // RETONA LISTA DE FUNCAO DE ACORDO COM O SETOR
    public function funcao($id){
        
        $setor = request('id'); // PARAMETRO URL

        $listCargo = Cargo::where([['setor_id', '=', $setor]])
                            ->select('id','nome')
                            ->orderBy('nome', 'ASC')->get(); // PEGA TODOS OS REGISTROS ATIVO DO BD DA TABELA CARGO

        return json_encode($listCargo);
 
    }

    // RETONA DETALHES DE FUNCIONARIO
    public function detalhes($id){
        
        $id = request('id'); // PARAMETRO URL

        $funcionario = Funcionario::where([['id', '=', $id]])->first(); // PEGA OS DADOS DO FUCIONARIO

        $funcionario->setor_id = $funcionario->setor->nome;  // SUBTITUI O ID PELO O NOME DO SETOR
        $funcionario->cargo_id = $funcionario->cargo->nome;  // SUBTITUI O ID PELO O NOME DO CARGO
        
        return json_encode($funcionario); 

    }

    // MEDOTO DE SALVA
    public function store(Request $request){
       
        $funcionario = new Funcionario;
        $funcionario->nome = $request->nome;
        $funcionario->email = $request->email;
        $funcionario->cpf = $request->cpf; 
        $funcionario->status = 1; 
        $funcionario->setor_id = $request->setor;
        $funcionario->cargo_id = $request->cargo;
        $funcionario->save();  // SALVA NO BD

        return redirect('/funcionario/gerenciar')->with('msg', 'Funcionario salvo com sucesso!'); // REDIRECIONA PARA A HOME COM MSG

    }

    // PASSA VALORES PARA EDIÇÃO NO FORMULARIO
    public function edit($id){

        $funcionario = Funcionario::find($id); // Recupera um modelo por sua chave primária 

        if(!$funcionario){  // CASO O ID NAO EXISTA
            return redirect('/funcionario/gerenciar'); 
        }

        $setors = Setor::where([['status', '=', 1]])->orderBy('nome', 'ASC')->get(); // PEGA TODOS OS REGISTROS ATIVO DO BD DA TABELA SETOR

        return view('funcionario.editar', ['funcionario' => $funcionario, 'setors' => $setors]); // PASSANDO AS VARIAVEIS
    }

    // METODO DE EDITAR
    public function update(Request $request){
        
        $data = $request->all();

        $funcionario = Funcionario::findOrFail($request->id)->update($data); // ATUALIZA TODOS OS DADOS DO FUNCIONARIO (MODIFICAR NO MODEL TBÉM)

        return redirect('/funcionario/gerenciar')->with('msg', 'Funcionario editado com sucesso!'); // REDIRECIONA PARA A LISTA COM MSG

    }

    // PASSA VALORES PARA EDIÇÃO NO FORMULARIO
    public function deletar($id){
        
        $funcionario = Funcionario::find($id); // Recupera um modelo por sua chave primária 

        if(!$funcionario){  // CASO O ID NAO EXISTA
            return redirect('/funcionario/gerenciar'); 
        }

        return view('funcionario.delete', ['funcionario' => $funcionario]); // PASSANDO AS VARIAVEIS
    }

    // METODO DE 'DELETE LOGICO' DO FUNCIONARIO (MUDANDO O STATUS DO FUNCIONARIO)
    public function delete(Request $request){
        
        $data = $request->all(); 

        $funcionario = Funcionario::findOrFail($request->id)->update($data); // ATUALIZA TODOS OS DADOS DO FUNCIONARIO (MODIFICAR NO MODEL TBÉM)

        return redirect('/funcionario/gerenciar')->with('msg', 'Funcionario removido com sucesso!'); // REDIRECIONA PARA A LISTA COM MSG

    }
  
}
