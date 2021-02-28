@extends('layouts.master')

@section('content')
<h1 class="top-title"><b>O que tem para assistir<a href="{{url('/easteregg')}}" class="ee">?</a></b></h1>

<form action="search" method="GET">
    <p>Procure os filmes mais populares por gênero.</p>
    <p>Não é possivel assistir aos filmes, apenas buscá-los.
        
    </p>
    <div class="form-buttons">
        <div class="row">
            <div class="col-sm">
                <a href="/searchAction">Ação</a> 
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm">
                <a href="/searchAdventure">Aventura</a> 
            </div>
        </div>
        

        <div class="row">
            <div class="col-sm">
                <a href="/searchComedy">Comédia</a> 
            </div>
        </div>
        

        <div class="row">
            <div class="col-sm">
                <a href="/searchDrama">Drama</a> 
            </div>
        </div>
        


        <div class="row">
            <div class="col-sm">
                <a href="/searchHorror">Terror</a> 
            </div>
        </div>
            
    </div>
    <p>ou</p>

    <p>Procure um filme por título</p>

    <div class="form-input">
        <input type="text" name="q" id="q" placeholder="Digite aqui o nome do filme">
        <button type="submit" class="btn btn-danger">Procurar</button>
    </div>
    
</form>


@endsection