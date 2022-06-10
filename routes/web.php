<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PainelController;  // IMPORTA O CONTROLE COM O NOME CONTROLER DA PASTA CONTROLLER
use App\Http\Controllers\SetorController;  
use App\Http\Controllers\CargoController;  
use App\Http\Controllers\FuncionarioController;  
use App\Http\Controllers\UserController;

use App\Http\Controllers\SuperController;

// USUARIO - START
    Route::get('/user/gerenciar', [UserController::class, 'gerenciar'])->name('user.gerenciar');

    Route::get('/user/cadastro', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/cadastro', [UserController::class, 'store'])->name('user.store');

    Route::get('/user/editar/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update'); 
// USUARIO - END

// NECESSARIO LOGIN PARA ACESSAR
Route::middleware('auth')->group(function(){

Route::get('/', [PainelController::class, 'painel']);  // ROTA PRINCIPAL 

// FUNCIONARIO - START
    Route::get('/funcionario/funcao/{id}', [FuncionarioController::class, 'funcao']); // RETORNA OS CARGOS DE ACORDO COM O SETOR

    Route::get('/funcionario/gerenciar', [FuncionarioController::class, 'gerenciar'])->name('funcionario.gerenciar'); // GERENCIAMENTO
    Route::get('/funcionario/detalhes/{id}', [FuncionarioController::class, 'detalhes']);                             // DETALHES DO FUNCIONARIO

    Route::get('/funcionario/cadastro', [FuncionarioController::class, 'create'])->name('funcionario.create');    // FORMULARIO DE CADASTRO
    Route::post('/funcionario/cadastro', [FuncionarioController::class, 'store'])->name('funcionario.store');         // POST PARA SALVA

    Route::get('/funcionario/editar/{id}', [FuncionarioController::class, 'edit'])->name('funcionario.edit');         // FORMULARIO DE EDITAR
    Route::put('/funcionario/update/{id}', [FuncionarioController::class, 'update'])->name('funcionario.update');     // POST PARA EDITAR

    Route::get('/funcionario/delete/{id}', [FuncionarioController::class, 'deletar'])->name('funcionario.deletar');   // FORMULARIO DE 'DELETE'
    Route::put('/funcionario/delete/{id}', [FuncionarioController::class, 'delete'])->name('funcionario.delete');     // 'DELETAR' UM FUNCIONARIO
// FUNCIONARIO - END

// SETOR - START
    Route::get('/setor/gerenciar', [SetorController::class, 'gerenciar'])->name('setor.gerenciar');

    Route::get('/setor/cadastro', [SetorController::class, 'create'])->name('setor.create');
    Route::post('/setor/cadastro', [SetorController::class, 'store'])->name('setor.store');

    Route::get('/setor/editar/{id}', [SetorController::class, 'edit'])->name('setor.edit');
    Route::put('/setor/update/{id}', [SetorController::class, 'update'])->name('setor.update');

    Route::get('/setor/delete/{id}', [SetorController::class, 'deletar'])->name('setor.deletar');
    Route::put('/setor/delete/{id}', [SetorController::class, 'delete'])->name('setor.delete');
// SETOR - END

// CARGO - START
    Route::get('/cargo/gerenciar', [CargoController::class, 'gerenciar'])->name('cargo.gerenciar');

    Route::get('/cargo/cadastro', [CargoController::class, 'create'])->name('cargo.create');
    Route::post('/cargo/cadastro', [CargoController::class, 'store'])->name('cargo.store');

    Route::get('/cargo/editar/{id}', [CargoController::class, 'edit'])->name('cargo.edit');
    Route::put('/cargo/update/{id}', [CargoController::class, 'update'])->name('cargo.update');

    Route::get('/cargo/delete/{id}', [CargoController::class, 'deletar'])->name('cargo.deletar');
    Route::patch('/cargo/delete/{id}', [CargoController::class, 'delete'])->name('cargo.delete');
// CARGO - END


// REPOSITORY

Route::get('funcionario/{id}', [FuncionarioController::class, 'funcao']);

});





