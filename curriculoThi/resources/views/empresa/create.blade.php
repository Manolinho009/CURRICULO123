@extends('layouts.main')

@section('title', 'PESSOAS')


@section('content')


</div>

<div class="container mt-4">
    <div class="row">

        <div class="col my-5">
          <div class="card">

            <div class="card-body">
              <h3 class="h3" style="color: rgb(19, 19, 19)">Empresa:</h3>
              <hr style="color: rgb(19, 19, 19)">

              <form id="formulario" action="/empresa/salvar/{{$pessoa_id}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">EMPRESA</label>
                <input type="text" class="form-control" name="empresa" id="empresa" ></div>
                <div class="form-group">
                  <label for="exampleInputPassword1">CARGO</label>
                  <input  type="text" class="form-control" name="cargo" id="cargo">
                </div>
              <div class="form-group">
                <label for="exampleInputPassword1">ENTRADA</label>
                <input  type="date" class="form-control" name="inicio" id="inicio">
                <label for="exampleInputPassword1">SAIDA</label>
                <div class="input-group-text">
                    <input id="saidaCheck" onchange="checkSaida()" class="form-check-input mt-0" type="checkbox" checked aria-label="Checkbox for following text input">
                    <input  type="date" class="form-control" name="saida" id="saida">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">DESCRIÇÃO</label>
                <textarea  type="text" class="form-control" name="descricao" id="descricao"></textarea>
              </div>
              
              <button type="submit" class="btn btn-primary">PROXIMO</button>

            </form>
        </div>
      </div>

        </div>

    </div>
</div>


<script>

function checkSaida(){

    $( "#saida" ).attr('disabled',!document.getElementById('saidaCheck').checked);
    $("#saida").val("")

}

</script>

@endsection


