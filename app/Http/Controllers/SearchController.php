<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class SearchController extends Controller


{

    public function search(Request $request){
        $q = $request->input('q');

        $response = Http::get("https://api.themoviedb.org/3/search/movie?api_key=YOURAPIKEYHEREb&language=pt-BR&page=1&include_adult=true&query=$q")->json();

        return view ('searchResult', 
        ['movies' => $response, 
        'searchTerm'=> $q,
        'page' => 'home']);
    }

    public function searchAction(){
        $response = Http::get("https://api.themoviedb.org/3/discover/movie?api_key=YOURAPIHEREb&language=pt-BR&with_genres=28")->json();

        return view('searchByGenre', [
            'movies' => $response,
            'searchTerm' => 'ação',
            'page' => 'home'
         ]
        );
    }

    public function searchAdventure(){
        $response = Http::get("https://api.themoviedb.org/3/discover/movie?api_key=YOURAPIKEYHERE&language=pt-BR&with_genres=12")->json();

        return view('searchByGenre', [
            'movies' => $response,
            'searchTerm' => 'aventura',
            'page' => 'home'

         ]
        );
    }

    public function searchComedy(){
        $response = Http::get("https://api.themoviedb.org/3/discover/movie?api_key=YOURAPIKEYHERE&language=pt-BR&with_genres=35")->json();

        return view('searchByGenre', [
            'movies' => $response,
            'searchTerm' => 'comédia',
            'page' => 'home'

         ]
        );
    }

    public function searchDrama(){
        $response = Http::get("https://api.themoviedb.org/3/discover/movie?api_key=YOURAPIKEYHERE&language=pt-BR&with_genres=18")->json();

        return view('searchByGenre', [
            'movies' => $response,
            'searchTerm' => 'drama',
            'page' => 'home'
         ]
        );
    }

    public function searchHorror(){
        $response = Http::get("https://api.themoviedb.org/3/discover/movie?api_key=YOURAPIKEYHERE&language=pt-BR&with_genres=27")->json();

        return view('searchByGenre', [
            'movies' => $response,
            'searchTerm' => 'terror',
            'page' => 'home'

         ]
        );
    }
}
