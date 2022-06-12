<?php

use App\Http\Controllers\CargoController;  

Route::get('/cargo/gerenciar', [CargoController::class, 'gerenciar'])->name('cargo.gerenciar');

Route::get('/cargo/cadastro', [CargoController::class, 'create'])->name('cargo.create');
Route::post('/cargo/cadastro', [CargoController::class, 'store'])->name('cargo.store');

Route::get('/cargo/editar/{id}', [CargoController::class, 'edit'])->name('cargo.edit');
Route::put('/cargo/update/{id}', [CargoController::class, 'update'])->name('cargo.update');

Route::get('/cargo/delete/{id}', [CargoController::class, 'deletar'])->name('cargo.deletar');
Route::patch('/cargo/delete/{id}', [CargoController::class, 'delete'])->name('cargo.delete');





