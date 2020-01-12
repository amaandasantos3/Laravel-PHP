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
                 
                        <div class="col-md-4 how-img">
                            <img src="/storage/{{ $anuncio->arquivo }}" class="img" id="img" alt=""  width: 35px;/>
                        </div>
                        <div class="col-md-6" id="text">
                            <h4>{{$anuncio->titulo}}</h4>
                             <h4 class="subheading">R$ {{$anuncio->valor}}</h4>
                             <p class="text-muted">{{$anuncio->cidade}}</p>
                        <p class="text-muted">{{$anuncio->descricao}}</p>
                        <a href="{{ route('googlemaps', [$anuncio->id, $anuncio->cidade]) }}" class="btn btn-primary">Ver Mapa</a>
                </div>
                    @endforeach
                   
        </div>
    </div>
</div>
@endsection

</body>

</html>