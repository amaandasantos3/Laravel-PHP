@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro de Anúncio</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
  <form method="POST" action="{{ route('cadastro.anuncio') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Valor</label>
      <input type="text" class="form-control" id="valor" name="valor">
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">Descrição</label>
      <input type="text" class="form-control" id="descricao" name="descricao">
    </div>
   
  </div>
  <div class="form-group col-md-12">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="endereco" name="endereco">
  </div>
  <div class="form-group col-md-12">
    <label for="arquivo">Image</label>
    <input type="file" class="form-control-file" id="arquivo" name="arquivo">
  </div>
  <br>
  <div style="text-align: center;">
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
