<!doctype html>
<html >
    <head>
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
    
    </head>


<body>

@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" id="card">
                <div class="card-body">
               
                    @foreach($anuncios as $anuncio)
                 
                        <div class="col-md-7 how-img">
                            <img src="/storage/{{ $anuncio->arquivo }}" class="img" id="img" alt=""  width: 35px;/>
                        </div>
                        <div class="col-md-6" >
                            <h4 id="text">{{$anuncio->titulo}}</h4>
                             <p class="text-muted" id="cidade">{{$anuncio->cidade}}</p>
                        <p class="text-muted" id="descricao">{{$anuncio->descricao}}</p>
                        <h4 class="subheading" id="valor">R$ {{$anuncio->valor}}</h4>
                        <a href="{{ route('googlemaps', [$anuncio->id, $anuncio->cidade]) }}" class="btn btn-primary" id="btn">Ver Mapa</a>
                        <a href="{{ route('anuncio.edit', [$anuncio->id]) }}" class="btn btn-warning" id="btn">Atualizar</a>
                        <form action="/{{ $anuncio->id }}" method="POST">
                        {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="delete">
                            <br>
                            <button type="submit" class="btn btn-danger">Apagar</button>
                          </form>
                </div>
                    @endforeach
                   
        </div>
    </div>
</div>
@endsection

</body>

</html>