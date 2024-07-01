<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Per la rotta / carica il file "welcome"
Route::get('/', function () {

    $data = [
        "msg" => "Benvenuto in classe #125",
        "description" => "lorem ipsum e tante altre parole significative",
        "studenti" => [
            "Michele",
            "Dihep",
            "Giacomo",
            "Giuseppe"
        ]
    ];

    return view('home', $data);
})->name("home");



//Per la rotta /about carica sempre il file "about"
Route::get('/about', function () {

    return view('about', config("data.store") );
})->name("about");



//Per la rotta /comics stampo la lista dei fumetti nella vista "comics"
Route::get('/comics', function() {

    $data = config("data.comics");
    return view('comics', $data);
})->name("comics-list");



//Per la rotta /comics/indice stampo il fumetto singolo nella vista "comicDetail"
Route::get('/comics/{indice}', function($indice) {

    $fumetti = config("data.comics.fumetti"); // .fumetti ???
    
    $data = [
        "fumetto" => $fumetti[$indice] //EXTRA: controllare se $indice è un valore valido
    ];

    return view('comics-details', $data);
})->name("comics-details");