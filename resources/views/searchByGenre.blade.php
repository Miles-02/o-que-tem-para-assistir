@extends('layouts.master')
@section('content')
<h1>Filmes de <i>{{$searchTerm}} encontrados</i>: </h1>
        
@foreach ($movies['results'] as $movie)

<div class="movie">
    <div class="movie-image">
        <img src="https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}" alt="">
    </div>
    

    <div class="movie-info">
            <p class="movie-info-title"><b>{{$movie['title']}}</b></p>

            @if(isset($movie['overview']) && $movie['overview'] != '')
                <p class="description"><b>Descrição:</b> {{$movie['overview']}}</p>
            @else 
                <p class="description">Infelizmente não conseguimos encontrar uma descrição para esse filme :(</p>
            @endif

            @if(isset($movie['release_date']))
                <p>
                <b>Data de lançamento:</b> {{
                    date("d/m/Y", strtotime($movie['release_date']))
                }}
                </p>
            @else

            <p class="description">Infelizmente não conseguimos encontrar a data de lançamento desse filme :(</p>


            @endif
    </div>
</div>
@endforeach
@endsection