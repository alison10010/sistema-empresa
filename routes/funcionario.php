<?php

use App\Http\Controllers\FuncionarioController;  

Route::get('/funcionario/funcao/{id}', [FuncionarioController::class, 'funcao']); // RETORNA OS CARGOS DE ACORDO COM O SETOR

Route::get('/funcionario/gerenciar', [FuncionarioController::class, 'gerenciar'])->name('funcionario.gerenciar'); // GERENCIAMENTO
Route::get('/funcionario/detalhes/{id}', [FuncionarioController::class, 'detalhes']);                             // DETALHES DO FUNCIONARIO

Route::get('/funcionario/cadastro', [FuncionarioController::class, 'create'])->name('funcionario.create');    // FORMULARIO DE CADASTRO
Route::post('/funcionario/cadastro', [FuncionarioController::class, 'store'])->name('funcionario.store');         // POST PARA SALVA

Route::get('/funcionario/editar/{id}', [FuncionarioController::class, 'edit'])->name('funcionario.edit');         // FORMULARIO DE EDITAR
Route::put('/funcionario/update/{id}', [FuncionarioController::class, 'update'])->name('funcionario.update');     // POST PARA EDITAR

Route::get('/funcionario/delete/{id}', [FuncionarioController::class, 'deletar'])->name('funcionario.deletar');   // FORMULARIO DE 'DELETE'
Route::put('/funcionario/delete/{id}', [FuncionarioController::class, 'delete'])->name('funcionario.delete');     // 'DELETAR' UM FUNCIONARIO
