<?php

namespace App\Repositories\Eloquent;

use App\Models\Cargo;

use App\Models\Setor; // USA A TABLE SETOR PARA RELACIONAR AO CARGO


class CargoRepository extends AbstractRepository{

    protected $model = Cargo::class;  // PASSA A VARIAVEL $model PARA AbstractRepository

    // RETONA SETOR ATIVO PARA CARGO
    public function listSetor()
    {
        $setorAtivo = Setor::where([['status', '=', 1]])->orderBy('nome', 'ASC')->get(); // PEGA TODOS OS REGISTROS ATIVO
        return $setorAtivo; 
    }

}