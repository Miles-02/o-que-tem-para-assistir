<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O que tem para assistir?</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/search.css')}}">

    <link rel="stylesheet" href="{{asset('css/about.css')}}">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary" style="background-color: #404040;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="textoNavbar">
          <ul class="navbar-nav navbar-right">

            @if($page == 'home')
              <li class="nav-item active">
            @else
              <li class="nav-item">
            @endif
            <a class="nav-link" href="  {{url('/')}}">Home <span class="sr-only">(Página atual)</span></a>
            </li>

            @if($page == 'about')
              <li class="nav-item active">
            @else
              <li class="nav-item">
            @endif
              <a class="nav-link" href="{{url('/about')}}">Sobre</a>
            </li>
          </ul>
        </div>
      </nav>

      <section class="main-content">
        @yield('content')
      </section>

      <script src="{{asset('js/jQuery.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>

