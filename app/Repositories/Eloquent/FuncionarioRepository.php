<?php

namespace App\Repositories\Eloquent;

use App\Models\Funcionario;
use App\Models\Setor; 
use App\Models\Cargo;

class FuncionarioRepository extends AbstractRepository{

    protected $model = Funcionario::class;  // PASSA A VARIAVEL $model PARA AbstractRepository

    public function setorAtivo()
    {
        return Setor::where([['status', '=', 1]])->orderBy('nome', 'ASC')->get();
    }

    public function funcaoSetor($setor)
    {
        $funcaoSetor = Cargo::where([['setor_id', '=', $setor],
                                      ['status', '=', '1']])
                                      ->select('id','nome')
                                      ->orderBy('nome', 'ASC')->get();
        return $funcaoSetor;                                     
    } 

    public function detalhesFunc($id)
    {
        $funcionario = Funcionario::find($id); // PEGA OS DADOS DO FUCIONARIO
        $funcionario->setor_id = $funcionario->setor->nome; 
        $funcionario->cargo_id = $funcionario->cargo->nome;

        return $funcionario;
    }

    
}