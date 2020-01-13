<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo asset('css/welcome.css')?>" type="text/css">

        <title>Inicio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                width: 1500px;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Cadastrar Anúncio</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Cadastre-se</a>
                    @endif
                </div>
            @endif
         
            <div class="content">
            <div class="title">
              <h1  id="tit">Quartos Disponíveis</h1>
            </div>
            <div class="row">
            @foreach($anuncios as $anuncio)
              <div class="col-sm-3">
                   <div class="card">
                   <img src="/storage/{{ $anuncio->arquivo }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="titulo card-title">{{ $anuncio->titulo }}</h5>
        <p class="desc card-text">{{ $anuncio->cidade }}</p>
        <p class="desc card-text">{{ $anuncio->descricao }}</p>
        <p class="desc card-text">R$ {{ $anuncio->valor }}</p>
        <a href="{{ route('ver.anuncios', ['id' => $anuncio]) }}" class="btn btn-warning" id="btn">Ver Detalhes</a>
      </div>
    </div>
  </div>
  @endforeach
            </div>

        </div>
   

    </body>
</html>
