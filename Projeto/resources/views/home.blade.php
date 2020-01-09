@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard Cadastro de Anúncio</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('cadastro.anuncio') }}">
                        {{ csrf_field() }}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Descção</label>
      <input type="text" class="form-control" id="descricao" name="descricao">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Contato</label>
      <input type="text" class="form-control" id="telefone" name="telefone">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Valor</label>
      <input type="number" class="form-control" id="valor" name="valor">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Rua</label>
    <input type="text" class="form-control" id="rua" name="rua">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Bairro</label>
    <input type="text" class="form-control" id="bairro" name="bairro">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="cidade" name="cidade">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Estado</label>
      <input type="text" class="form-control" id="estado" name="estado">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">CEP</label>
      <input type="text" class="form-control" id="cep" name="cep">
    </div>
  </div>
  <input type='file' id="primaryImage" name="primaryImage" accept="image/*" />
  <br>
  <div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
