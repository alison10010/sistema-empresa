<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PainelController;  // IMPORTA O CONTROLE DA PASTA CONTROLLERS
use App\Http\Controllers\UserController;


require __DIR__.'/auth.php';  // ADD AUTH NA MESA PASTA

Route::get('/user/gerenciar', [UserController::class, 'gerenciar'])->name('user.gerenciar');

Route::get('/user/cadastro', [UserController::class, 'create'])->name('user.create');
Route::post('/user/cadastro', [UserController::class, 'store'])->name('user.store');

Route::get('/user/editar/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');

// ACESSO PROIBIDO APOS O LOGIN
Route::middleware('guest')->group(function(){

});

Route::get('/', [PainelController::class, 'painel'])->middleware(['verified']);  // ROTA PRINCIPAL 

// NECESSARIO LOGIN PARA ACESSAR
Route::middleware('auth')->group(function(){

    

    // CARGO NA MESA PASTA
    require __DIR__.'/funcionario.php';

    // CARGO NA MESA PASTA
    require __DIR__.'/setor.php';  

    // CARGO NA MESA PASTA
    require __DIR__.'/cargo.php';  

});


Route::get('/teste', function () {

     return response()->json(["Status" => "Verificado"]);

})->middleware(['verified']);








