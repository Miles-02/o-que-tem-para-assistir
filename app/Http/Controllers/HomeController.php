<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

//https://api.themoviedb.org/3/movie/550?api_key=

class HomeController extends Controller

{
    public function index(){
        return view('home', [
            'page' => 'home'
        ]
    );
    }


    public function about(){
        return view('about', [
            'page' => 'about'
        ]);
    }
}
