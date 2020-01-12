<!doctype html>
<html lang="{{ app()->getLocale() }}">
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
                        <p class="text-muted">{{$anuncio->descricao}}</p>
                   
                </div>

                <iframe src="https://www.google.com/maps/embed?pb={{anuncio -> rua}}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    @endforeach
                   
        </div>
    </div>
</div>
@endsection

</body>

</html>