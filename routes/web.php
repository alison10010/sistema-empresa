<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PainelController;  // IMPORTA O CONTROLE DA PASTA CONTROLLERS
use App\Http\Controllers\UserController;


require __DIR__.'/auth.php';  // ADD AUTH NA MESA PASTA

// NECESSARIO LOGIN PARA ACESSAR
Route::middleware('auth')->group(function()
{
    // NECESSARIO EMAIL VERIFICADO PARA ACESSAR
    Route::middleware('verified')->group(function()
    {
        Route::get('/', [PainelController::class, 'painel']);  // ROTA PRINCIPAL 
        
        // ROTAS NA MESMA PASTA
        require __DIR__.'/usuario.php';

        require __DIR__.'/funcionario.php';

        require __DIR__.'/setor.php';  

        require __DIR__.'/cargo.php';
    });
});

// PAGINA NAO ENCONTRADA EM PRODUCAO APENAS
Route::any('{url}', function(){ 
    return view('/not-found');
})->where( 'url','.*');

