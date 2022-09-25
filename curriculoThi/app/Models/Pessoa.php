<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = [
        'links' => 'array',
        'competencias' => 'array',
        'idiomas' => 'array'
    ];
    
    public function cursos(){

        return $this->hasMany('App\Models\Curso');

    }
    public function contatos(){

        return $this->hasMany('App\Models\Contato');

    }
    public function empresas(){

        return $this->hasMany('App\Models\Empresa');

    }
}
