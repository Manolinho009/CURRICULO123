<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Empresa;
use App\Models\Pessoa;

class EmpresaControll extends Controller
{
    
    public function index()
    {
        return view('welcome');
    }
    public function create($id)
    {

        return view('empresa.create',['pessoa_id'=>$id]);
    }

    
    public function show($id)
    {
        $dados_empresa = Pessoa::findOrFail($id);
        return view('welcome.show',['dados_empresa' =>  $dados_empresa]);
    }


    public function store(Request $request, $id)
    {
        $dados_empresa = new Empresa;

        $dados_empresa ->empresa = $request->empresa;
        $dados_empresa ->inicio = $request->inicio;
        $dados_empresa ->saida = $request->saida;
        $dados_empresa ->cargo = $request->cargo;
        $dados_empresa ->descricao = $request->descricao;

        $dados_empresa ->pessoa_id = Pessoa::findOrFail($id)->id;

        $dados_empresa->save();
        
        return view('/welcome');
    }
    
}
