@extends('layouts.main')

@section('title', 'PESSOAS')


@section('content')


<div id="container-main" class="col-md-12">
    <h1 id="nome-titulo" class="">
        Thiago Rocha
    </h1>
    <br>
    <h3 class="display-4 fs-2" id="subtitulo">
        Operador de Call Center
    </h3>
</div>

<div class="container mt-3">
    <div class="row">

        <div class="col">
            

            <h2 class="mt-4">Sobre Mim:</h2>

            <hr class="my-3">
            
            <p>
                Sou formado em “Técnico de Informática com ênfase em desenvolvimento de sistemas”(TI) pelo Senai. Sou dedicado e criativo, sou muito empenhado e disposto a aprender,busco principalmente oportunidades onde eu possa desenvolver uma carreira e crescer profissionalmente buscando uma carreira longa e sólida.
            </p>

            <br>
            <br>
            <h2 class="mt-4">Experiencias:</h2>

            <hr class="my-3">

            
            <div class="col">
                <div class="card shadow rounded" id="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">NOME</h5>
                        <h6 class="card-subtitle mb-2 mt-2" style="color: white">FUNÇÃO</h6>
                        <p class="card-text" style="color: white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Detalhes</a>
                        <a href="#" class="card-link">Local</a>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <h2 class="mt-4">Escolaridade:</h2>

            <hr class="my-3">

            <div class="col">
                <div class="card shadow rounded" id="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">CURSO</h5>
                        <h6 class="card-subtitle mb-2 mt-2" style="color: white">INSTITUIÇÃO</h6>
                        <p class="card-text" style="color: white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Detalhes</a>
                        <a href="#" class="card-link">Local</a>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>

@endsection
