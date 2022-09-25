@extends('layouts.main')

@section('title', 'PESSOAS')


@section('content')


</div>

<div class="container mt-4">
    <div class="row">

        <div class="col my-5">
          <div class="card">

            <div class="card-body">
              <h3 class="h3" style="color: rgb(19, 19, 19)">Dados:</h3>
              <hr style="color: rgb(19, 19, 19)">

              <form id="formulario" action="/salvar" method="POST">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">NOME</label>
                <input type="text" class="form-control" name="nome" id="nome" ></div>
                <div class="form-group">
                  <label for="exampleInputPassword1">IDADE</label>
                  <input  type="text" class="form-control" name="idade" id="idade">
                </div>
              <div class="form-group">
                <label for="exampleInputPassword1">SEXO</label>
                <input  type="text" class="form-control" name="sexo" id="sexo">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">DESCRIÇÃO</label>
                <textarea  type="text" class="form-control" name="descricao" id="descricao"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">TITULO</label>
                <input  type="text" class="form-control" name="titulo" id="titulo">
              </div>

              <h3 class="h3 mt-5" style="color: rgb(19, 19, 19)">Links:</h3>
              <hr style="color: rgb(19, 19, 19)">

              <div id="maisLinkContainer">
              </div>
              <div>
                <a  onclick="addLink()" class="btn btn-sucess">Add Link</a>
              </div>

              <h3 class="h3 mt-5" style="color: rgb(19, 19, 19)">Idiomas:</h3>
              <hr style="color: rgb(19, 19, 19)">
              
              
              <div id="maisidiomaContainer">
              </div>
              <div class="my-4">
                <a  onclick="addIdioma()" class="btn btn-sucess">Add Idioma</a>
              </div>
              
              
              <h3 class="h3 mt-5" style="color: rgb(19, 19, 19)">Skills:</h3>
              <hr style="color: rgb(19, 19, 19)">
              
              
              <div id="maisSkillContainer">
              </div>
              <div class="my-4">
                <a  onclick="addSkill()" class="btn btn-sucess">Add Skill</a>
              </div>
              
              <button type="submit" class="btn btn-primary">PROXIMO</button>

              

            </form>
        </div>
      </div>

        </div>

    </div>
</div>


<script>
function validarChek(id, self) {
    document.getElementById(id).disabled = !document.getElementById(self).checked;
};


linkCont = 0;
function addLink(){

  link = document.createElement('div')
  link.id = 'linkExtra-'+linkCont;
  link.className = "input-group mb-3" 
  link.innerHTML = '<input type="text" id="linkText-'+linkCont+'" class="form-control" placeholder="Link" name="links[]" aria-label="Text input"> <button type="button" onclick="document.getElementById(\'linkExtra-'+linkCont+'\').remove()" class="btn btn-danger mx-2">Del</button>'
  document.getElementById("maisLinkContainer").appendChild(link)
  linkCont +=1;
}

idiomaCont = 0;
function addIdioma(){

  idioma = document.createElement('div')
  idioma.id = 'idiomaExtra-'+idiomaCont;
  idioma.className = "input-group mb-3" 
  idioma.innerHTML = '<input type="text" id="idiomaText-'+idiomaCont+'" class="form-control" placeholder="idioma" name="idiomas[]" aria-label="Text input"><button type="button" onclick="document.getElementById(\'idiomaExtra-'+idiomaCont+'\').remove()" class="btn btn-danger mx-2">Del</button>'
  document.getElementById("maisidiomaContainer").appendChild(idioma)
  idiomaCont +=1;
}

skillCont = 0;
function addSkill(){

  skill = document.createElement('div')
  skill.id = 'skillExtra-'+skillCont;
  skill.className = "input-group mb-3" 
  skill.innerHTML = '<input type="text" id="skillText-'+skillCont+'" class="form-control" placeholder="skill" name="competencias[]" aria-label="Text input"><button type="button" onclick="document.getElementById(\'skillExtra-'+skillCont+'\').remove()" class="btn btn-danger mx-2">Del</button>'
  document.getElementById("maisSkillContainer").appendChild(skill)
  skillCont +=1;
}

</script>

@endsection


