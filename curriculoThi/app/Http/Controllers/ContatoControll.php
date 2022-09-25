<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\Pessoa;


class ContatoControll extends Controller
{

    public function index()
    {
        return view('welcome');
    }
    public function store(Request $request, $id)
    {
        $dados_contato = new Contato;

        $dados_contato ->email = $request->email;
        $dados_contato ->telefone = $request->telefone;
        $dados_contato ->endereco = $request->endereco;

        $dados_contato ->pessoa_id = $id;

        $dados_contato->save();
        
        return view('/welcome');
    }
}
