@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Anúncio</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

 @foreach($anuncios as $anuncio)
  <form method="POST" action="/{{ $anuncio->id }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
   <input type="text" class="form-control" id="titulo" name="titulo" value="{{$anuncio->id}}">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo" value="{{$anuncio->titulo}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Descção</label>
      <input type="text" class="form-control" id="descricao" name="descricao" value="{{$anuncio->descricao}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Contato</label>
      <input type="text" class="form-control" id="telefone" name="telefone" value="{{$anuncio->telefone}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Valor</label>
      <input type="number" class="form-control" id="valor" name="valor" value="{{$anuncio->valor}}">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Rua</label>
    <input type="text" class="form-control" id="rua" name="rua" value="{{$anuncio->rua}}">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Bairro</label>
    <input type="text" class="form-control" id="bairro" name="bairro" value="{{$anuncio->bairro}}">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="cidade" name="cidade" value="{{$anuncio->cidade}}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Estado</label>
      <input type="text" class="form-control" id="estado" name="estado" value="{{$anuncio->estado}}">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">CEP</label>
      <input type="text" class="form-control" id="cep" name="cep" value="{{$anuncio->cep}}">
    </div>
  </div>
  <div class="form-group">
    <label for="arquivo">Image</label>
    <input type="file" class="form-control-file" id="arquivo" name="arquivo">
  </div>
  <br>
  <div>
  <button type="submit" class="btn btn-primary">Editar</button>
  </div>
</form>
@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
