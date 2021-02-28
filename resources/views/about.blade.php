@extends('layouts.master')

@section('content')

    <div class="dev">
        <img src="" alt="">
            <p><b>Desenvolvido com &hearts; por miles-02</b></p>

            <div class="dev-links">
            <a href="https://github.com/Miles-02">
                <img src="{{asset('imgs/github-logo.png')}}" alt="">
            </a>
            <a href="https://twitter.com/miguelssaless">
                <img src="{{asset('imgs/twitter-logo.png')}}" alt="">
            </a>

            <a href="https://instagram.com/miguelssaless">
                <img src="{{asset('imgs/insta-logo.png')}}" alt="">
            </a>
        </div>
    </div>

    <div class="notice">
        <p><b>This product uses the TMDb API but is not endorsed or certified by TMDb.</b></p>

        <p>Esse produto utiliza a API do TMDb mas não é aprovado ou certificado pelo TMDb.</p>

        <img src="{{asset('imgs/tmdb-logo.svg')}}" alt="">

        <p>Todas as informações oferecidas por esse site são de autoria de <a href="https://themoviedb.org">www.themoviedb.org</a>. O desenvolvedor não se responsabiliza por quaisquer informações aqui presente.</p>
        <br>
        <br>

        <p>Nenhuma informação de pesquisa ou busca inserida aqui é guardada pelo desenvolvedor. Todas as requisições são enviadas diretamente para a API do TMDb.</p>

       
    </div>
    

@endsection