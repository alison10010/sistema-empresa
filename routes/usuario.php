<?php

use App\Http\Controllers\UserController;

Route::get('/user/gerenciar', [UserController::class, 'gerenciar'])->name('user.gerenciar');

Route::get('/user/editar', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');

Route::get('/user/perfil', [UserController::class, 'perfil'])->name('user.perfil');







