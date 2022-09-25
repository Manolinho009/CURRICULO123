<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Pessoa;


class CursoController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function create($id)
    {

        return view('curso.create',['pessoa_id'=>$id]);
    }

    
    public function show($id)
    {
        $dados_curso = Curso::findOrFail($id);
        return view('welcome.show',['$dados_curso' =>  $dados_curso]);
    }


    public function store(Request $request, $id)
    {
        $dados_curso = new Curso;

        $dados_curso ->curso = $request->curso;
        $dados_curso ->instituicao = $request->instituicao;
        $dados_curso ->inicio = $request->inicio;
        $dados_curso ->termino = $request->termino;
        $dados_curso ->local = $request->local;

        $dados_curso ->pessoa_id = Pessoa::findOrFail($id)->id;

        $dados_curso->save();
        
        return view('/welcome');
    }
}
