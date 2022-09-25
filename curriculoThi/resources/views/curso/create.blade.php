@extends('layouts.main')

@section('title', 'PESSOAS')


@section('content')


</div>

<div class="container mt-4">
    <div class="row">

        <div class="col my-5">
          <div class="card">

            <div class="card-body">
              <h3 class="h3" style="color: rgb(19, 19, 19)">Curso:</h3>
              <hr style="color: rgb(19, 19, 19)">

              <form id="formulario" action="/curso/salvar/{{$pessoa_id}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">CURSO</label>
                <input type="text" class="form-control" name="curso" id="curso" ></div>
                <div class="form-group">
                  <label for="exampleInputPassword1">INSTITUIÇÃO</label>
                  <input  type="text" class="form-control" name="instituicao" id="instituicao">
                </div>
              <div class="form-group">
                <label for="exampleInputPassword1">ENTRADA</label>
                <input  type="date" class="form-control" name="inicio" id="inicio">
                <label for="exampleInputPassword1">Termino</label>
                <div class="input-group-text">
                    <input onchange="checkTermino()"  id="terminoCheck" class="form-check-input mt-0" type="checkbox" checked aria-label="Checkbox for following text input">
                    <input type="date" class="form-control" name="termino" id="termino">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">LOCAL</label>
                <textarea  type="text" class="form-control" name="local" id="local"></textarea>
              </div>
              
              <button type="submit" class="btn btn-primary">PROXIMO</button>

            </form>
        </div>
      </div>

        </div>

    </div>
</div>


<script>
    
    function checkTermino(){
    
        $( "#termino" ).attr('disabled',!document.getElementById('terminoCheck').checked);
        $("#termino").val("")
    
    }


</script>

@endsection


