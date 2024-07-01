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

//Rotta di test, richiama sempre la vista "home" ma usando il compact
Route::get('/test', function () {

    $msg = "Benvenuto in classe #125";
    $description = "messaggio di test, tutto funziona con compact";

    // $data = [
    //     "msg" => $msg,
    //     "description" => $description
    // ];

    $data = compact("msg", "description");

    return view('home', $data);
});

//Per la rotta /credits carica il file "about"
Route::get('/credits', function () {

    $data = config("data.store");
    return view('about', $data);
});

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

    $allData = config("data.comics");
    $arrayFumetti = $allData["fumetti"];
    //EXTRA: controllare se $indice è un valore valido
    $singoloFumetto = $arrayFumetti[$indice];
    $fumettoData = [
        "fumetto" => $singoloFumetto
    ];

    return view('comics-details', $fumettoData);
})->name("comics-details");