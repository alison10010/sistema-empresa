<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use App\Http\Requests\ValidaCargoForm; // VALIDA OS CAMPOS DE CADASTRO E UPDADE DO CARGO

use App\Repositories\Eloquent\CargoRepository;  // REGRAS DE NEGOCIOS

use App\Models\Cargo;
 
class CargoController extends Controller{

    // METODO DE LISTAR
    public function gerenciar(CargoRepository $model)
    { 
        $cargos = $model->listAtivos();
        return view('cargo.gerenciar',['cargos' => $cargos]);
    }
    
    // RETONA A PAGE DE CADASTRO
    public function create(CargoRepository $model)  // CargoRepository Regras
    {
        $setors = $model->listSetor();
        return view('cargo.cadastro',['setors' => $setors]); 
    }

    // MEDOTO DE SALVA 
    public function store(ValidaCargoForm $request, CargoRepository $model) // StoreUpdateCargoForm valida os dados
    {
        $data = $request->all(); 
        $model->store($data); // SALVA
        return redirect()->route('cargo.gerenciar')->with('msg', 'Cargo criado com sucesso!');
    }

    // PASSA VALORES PARA EDIÇÃO
    public function edit($id, CargoRepository $model)
    {
        $cargo = $model->getById($id); // Recupera por sua primary key
        $setors = $model->listSetor();

        if(!$cargo){   // ID INEXISTENTE
            return redirect()->route('cargo.gerenciar');
        }
        return view('cargo.editar', ['cargo' => $cargo, 'setors' => $setors]);
    }

    // METODO DE EDITAR
    public function update(ValidaCargoForm $request, CargoRepository $model)
    {
        $data = $request->all();
        $model->update($request->id, $data); // EDITA
        return redirect()->route('cargo.gerenciar')->with('msg', 'Cargo editado com sucesso!');
    }

     // PASSA VALORES PARA EDIÇÃO NO FORMULARIO
    public function deletar($id, CargoRepository $model)
    {
        $cargo = $model->getById($id);
        
        if(!$cargo){  // ID INEXISTENTE
            return redirect()->route('cargo.gerenciar');
        }
        return view('cargo.delete', ['cargo' => $cargo]);
    }

    // METODO DE 'DELETE LOGICO' (STATUS = 0)
    public function delete(Request $request, CargoRepository $model)
    {
        $model->delete($request->id);
        return redirect()->route('cargo.gerenciar')->with('msg', 'Cargo removido com sucesso!');
    }
 
}
