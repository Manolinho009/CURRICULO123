@extends('layouts.main')

@section('title', 'PESSOAS')


@section('content')

<div class="container my-5">
    <div class="col">
        <h1 class="h1 my-4">Seus Dados</h1>

        <br>

        <h3 class="display-3">{{$dados_pessoa->nome}}</h3>
        <h3>{{$dados_pessoa->idade}} Anos</h3>

        <h4 class="h4 mt-3">{{$dados_pessoa->titulo}}</h4>

        <p class="mt-3">{{$dados_pessoa->descricao}}</p>
        <hr>
        <p>links</p>
            <ul>
                @foreach ($dados_pessoa->links as $link)
                    <li>{{$link}}</li>
                @endforeach
            </ul>
        <p>idiomas</p>
            <ul>
                @foreach ($dados_pessoa->idiomas as $idioma)
                    <li>{{$idioma}}</li>
                @endforeach
            </ul>

        <p>Skills</p>
            <ul>
                @foreach ($dados_pessoa->competencias as $competencia)
                    <li>{{$competencia}}</li>
                @endforeach
            </ul>
            
            
            <p>EMPRESAS</p>
                <ul>
                    @foreach ($dados_empresa as $empresa)
                        <li>{{$empresa}}</li>
                    @endforeach
                </ul>
            <p>CURSOS</p>
                <ul>
                    @foreach ($dados_curso as $curso)
                        <li>{{$curso}}</li>
                    @endforeach
                </ul>
            <p>CONTATOS</p>
                <ul>
                    @foreach ($dados_contato as $contato)
                        <li>{{$contato}}</li>
                    @endforeach
                </ul>
                

            <form method="POST" action="/empresa/create/{{$dados_pessoa->id}}">
                @csrf
                <a href="/empresa/create/{{$dados_pessoa->id}}" 
                    class="btn btn-primary" 
                    id="event-submit"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    Add Experiencia
                  </a>
            </form>

            <form method="POST" action="/curso/create/{{$dados_pessoa->id}}">
                @csrf
                <a href="/curso/create/{{$dados_pessoa->id}}" 
                    class="btn btn-primary" 
                    id="event-submit"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    Add Curso
                  </a>
            </form>


{{--   -------------------------------------------------------------------------------  --}}



<div class="container">
    <h1>Ajax Data Insert</h1>
    <form method="POST" action="/contato/salvar/{{$dados_pessoa->id}}">
        @csrf
       <div class="form-group">
            <label>CONTATO:</label>
            <input type="email" name="email" class="form-control" placeholder="email" required="">

        </div>

        <div class="form-group">
            <label>telefone:</label>
            <input type="text" name="telefone" class="form-control" placeholder="telefone" required="">
        </div>
        
        <div class="form-group">
            <label>Endereço:</label>
            <textarea type="text" name="endereco" class="form-control" placeholder="endereco" required=""></textarea>
        </div>
       
        <div class="form-group">
            <button class="btn btn-success">Salvar</button>
        </div>

    </form>
</div>
            

    </div>
</div>,




@endsection