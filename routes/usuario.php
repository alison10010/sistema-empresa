<?php

use App\Http\Controllers\UserController;

Route::get('/user/gerenciar', [UserController::class, 'gerenciar'])->name('user.gerenciar');

Route::get('/user/editar/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');







