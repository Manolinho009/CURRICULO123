<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pessoa;
use App\Models\Empresa;
use App\Models\Curso;
use App\Models\Contato;
use App\Models\User;

class curriculo extends Controller
{
    
    public function index()
    {
        return view('welcome');
    }
    public function create()
    {
        return view('curriculo.create');
    }

    
    public function show($id)
    {
        $dados_pessoa = Pessoa::findOrFail($id);
        $dados_empresas = Empresa::all();
        $dados_cursos = Curso::all();
        $dados_contatos = Contato::all();

        $empresaList = array();
        $contatoList = array();
        $cursosList = array();

        foreach($dados_empresas as $empresa) {
            if($empresa['pessoa_id'] == $id) {
                array_push($empresaList, $empresa);
            }
        }
        foreach($dados_contatos as $contato) {
            if($contato['pessoa_id'] == $id) {
                array_push($contatoList, $contato);
            }
        }
        foreach($dados_cursos as $curso) {
            if($curso['pessoa_id'] == $id) {
                array_push($cursosList, $curso);
            }
        }
        
        return view('dashboard',['dados_pessoa' =>  $dados_pessoa, 'dados_empresa' => $empresaList, 'dados_curso' => $cursosList, 'dados_contato' => $contatoList]);
    }


    public function store(Request $request)
    {
        $dados_pessoa = new Pessoa;

        $dados_pessoa ->nome = $request->nome;
        $dados_pessoa ->idade = $request->idade;
        $dados_pessoa ->sexo = $request->sexo;
        $dados_pessoa ->titulo = $request->titulo;
        $dados_pessoa ->descricao = $request->descricao;
        $dados_pessoa ->links = $request ->links;
        $dados_pessoa ->idiomas = $request ->idiomas;
        $dados_pessoa ->competencias= $request ->competencias;

        $user = auth()->user();
        // $dados_pessoa->id =  $user;

        $dados_pessoa->save();
        
        return view('/welcome');
    }
    
    
}
