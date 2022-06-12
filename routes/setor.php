<?php

use App\Http\Controllers\SetorController;

Route::get('/setor/gerenciar', [SetorController::class, 'gerenciar'])->name('setor.gerenciar');

Route::get('/setor/cadastro', [SetorController::class, 'create'])->name('setor.create');
Route::post('/setor/cadastro', [SetorController::class, 'store'])->name('setor.store');

Route::get('/setor/editar/{id}', [SetorController::class, 'edit'])->name('setor.edit');
Route::put('/setor/update/{id}', [SetorController::class, 'update'])->name('setor.update');

Route::get('/setor/delete/{id}', [SetorController::class, 'deletar'])->name('setor.deletar');
Route::put('/setor/delete/{id}', [SetorController::class, 'delete'])->name('setor.delete');

