<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreUpdateUserForm; // VALIDA OS CAMPOS DE CADASTRO E UPDADE DO USER

use App\Models\User;

class UserController extends Controller
{

    public function create()
    {
        return view('user.create'); 
    }
    
    // SALVA USER NO BD
    public function store(StoreUpdateUserForm $request)  // StoreUpdateUserForm valida os dados
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
    public function edit($id){
        
        $usuario = User::find($id); // Recupera um modelo por sua chave primária

        if(!$usuario){  // CASO O ID NAO EXISTA
            return redirect()->route('user.gerenciar');
        } 
        return view('user.editar', ['usuario' => $usuario]); // PASSANDO AS VARIAVEIS

    } 

    // METODO DE EDITAR
    public function update(StoreUpdateUserForm $request, $id){

        if(!$user = User::find($id)){
            return redirect()->route('user.gerenciar');
        }

        $data = $request->only('name', 'email'); // PEGA APENAS CAMPOS ESPECIFICOS
        
        if($request->password){  // VERIFICA SE INFORMOU NOVA SENHA
            $data['password'] = bcrypt($request->password); // SENHA ENCRYPYT
        }

        $user->update($data);
  
        return redirect()->route('user.gerenciar')->with('msg', 'Usuario Editado com sucesso!'); // REDIRECIONA PARA A HOME COM MSG;
    }

    public function destroy($id)
    {
        //
    }
}
