<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidaSetorForm; // VALIDA OS CAMPOS DE CADASTRO E UPDADE DO USER

use App\Models\User;

class UserController extends Controller
{

    public function create()
    {
        return view('user.create'); 
    }
    
    // SALVA USER NO BD
    public function store(ValidaSetorForm $request)  // ValidaSetorForm valida os dados
    {

        $usuario = $request->all();

        $usuario['password'] = bcrypt($request->password); // SENHA ENCRYPYT
        User::create($usuario);  // CRIA UM NOVO USER 
        
        return response()->json(["cadastro" => $usuario]); 
    }

    public function gerenciar(){
        $usuarios = User::all();

        return view('user.gerenciar', ['usuarios' => $usuarios]); // PASSANDO AS VARIAVEIS
    }

    public function show($id){
    }

    // PASSA VALORES PARA EDIÇÃO NO FORMULARIO
    public function edit(){

        $usuario = auth()->user(); // PEGA O USER LOGADO E ATRIBUI EM VARIAVEL
        
        return view('user.editar', ['usuario' => $usuario]); // PASSANDO AS VARIAVEIS

    } 

    // METODO DE EDITAR
    public function update(ValidaSetorForm $request, $id){

        $usuario = auth()->user();

        if(!$user = User::find($id)){ // NAO ENCONTRAR O ID
            return redirect()->route('user.gerenciar');
        }

        if($usuario->id != $user->id){  // CASO O EVENTO A SER EDITADO NAO SEJA DO USER LOGADO
            return redirect()->route('user.gerenciar')->with('msg', 'Ação recusada!');
        }

        $data = $request->only('name', 'email'); // PEGA APENAS CAMPOS ESPECIFICOS
        
        if($request->password){  // VERIFICA SE INFORMOU NOVA SENHA
            $data['password'] = bcrypt($request->password); // SENHA ENCRYPYT
        }

        $user->update($data);
  
        return redirect()->route('user.gerenciar')->with('msg', 'Usuario Editado com sucesso!'); // REDIRECIONA PARA A HOME COM MSG;
    }

    // PASSA VALORES PARA O PERFIL
    public function perfil(){

        $usuario = auth()->user(); // PEGA O USER LOGADO E ATRIBUI EM VARIAVEL
        
        return view('user.perfil', ['usuario' => $usuario]); // PASSANDO AS VARIAVEIS

    } 

    public function destroy($id)
    {
        //
    }
}
