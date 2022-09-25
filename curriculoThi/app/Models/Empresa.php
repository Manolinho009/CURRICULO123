<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $dates = ['inicio','saida'];

    public function pessoa(){

        return $this->belongsTo('App\Models\Pessoa');
    }
}
