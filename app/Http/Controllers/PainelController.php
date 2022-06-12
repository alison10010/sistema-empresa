<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cargo;

use App\Models\Setor; 

use App\Models\Funcionario; 

class PainelController extends Controller
{
    // 
    public function painel(){

        $setors = Setor::where([['status', '=', 1]])->count();  // RETORNA QUANTIDADE DE SETOR CADASTRADO
        $cargos = Cargo::where([['status', '=', 1]])->count();  // RETORNA QUANTIDADE DE CARGO CADASTRADO
        $funcionarios = Funcionario::where([['status', '=', 1]])->count();  // RETORNA QUANTIDADE DE FUNCIONARIO CADASTRADO
        
        return view('/painel/dashboard',['setors' => $setors, 'cargos' => $cargos, 'funcionarios' => $funcionarios]); 

    }
}
 