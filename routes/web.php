<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect ('/home');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/search', [SearchController::class, 'search']);
Route::get('/about', [HomeController::class, 'about']);

Route::get('/searchAction', [SearchController::class, 'searchAction']);
Route::get('/searchAdventure', [SearchController::class, 'searchAdventure']);
Route::get('/searchComedy', [SearchController::class, 'searchComedy']);
Route::get('/searchDrama', [SearchController::class, 'searchDrama']);
Route::get('/searchHorror', [SearchController::class, 'searchHorror']);


Route::get('/easteregg', function (){
    return view('ee');
})->name('ee');

