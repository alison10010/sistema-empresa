<?php

namespace App\Repositories;

use App\Models\Cargo;
use App\Models\Setor;

// OS METODOS ABSTRACT PODE SER UTILIZADO POR VARIOS MODELs 

class AbstractRepository{

    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel(); // MODEL PASSADO SE TORNA '$this->model'
    }

    protected function resolveModel()
    {
        return app($this->model); // RETORNA A CLASS
    }

    // LISTA DE ATIVOS
    public function listAtivos()
    {
        $modelAtivo = $this->model::where([['status', '=', 1]])->get();
        return $modelAtivo;
    }

    // SALVA
    public function store(array $data) 
    {
        return $this->model->create($data);
    }

    // BUSCA POR ID
    public function update($id, array $data) 
    {
        return $this->model->find($id)->update($data);
    }

    // 'DELETE' POR ID
    public function delete($id) 
    {
        return $this->model->find($id)->update(["status" => "0"]);
    }

    // BUSCA POR ID
    public function getById($id) 
    {
        return $this->model->find($id);
    }


}