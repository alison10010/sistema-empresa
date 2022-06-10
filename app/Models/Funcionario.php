<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory; 

    protected $guarded = []; // NECESSARIO PARA ATUALIZA 

    public function setor(){  // RELACAO DE N PRA 1
        return $this->belongsTo(Setor::class);
    } 

    public function cargo(){  // RELACAO DE N PRA 1
        return $this->belongsTo(Cargo::class);
    }
}
