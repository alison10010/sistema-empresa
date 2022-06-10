<?php

namespace App\Repositories\Eloquent;

use App\Models\Setor; // USA A TABLE SETOR PARA RELACIONAR AO CARGO


class SetorRepository extends AbstractRepository{

    protected $model = Setor::class;  // PASSA A VARIAVEL $model PARA AbstractRepository

}