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

Route::get('/', function () {
    return view('home', ['titoloBlog' => 'Blog di Sandro']);
})->name('home');

Route::get('/articoli', function () {

    $articoli = [['titolo'=> 'Articolo 1', 'categoria'=> 'animali', 'descrizione' => 'descrizione articolo 1'],
    ['titolo'=> 'Articolo 2', 'categoria'=> 'auto', 'descrizione' => 'descrizione articolo 2'],
    ['titolo'=> 'Articolo 3', 'categoria'=> 'elettronica', 'descrizione' => 'descrizione articolo 3'],
    ['titolo'=> 'Articolo 4', 'categoria'=> 'cucina', 'descrizione' => 'descrizione articolo 4']
];
    return view('articoli',['articoli' => $articoli]);
})->name('articoli');

route::get('/articolo/articolo_completo/{id}',function($id){
    $articoli = [['titolo'=> 'Articolo 1', 'categoria'=> 'animali', 'descrizione' => 'descrizione articolo 1'],
    ['titolo'=> 'Articolo 2', 'categoria'=> 'auto', 'descrizione' => 'descrizione articolo 2'],
    ['titolo'=> 'Articolo 3', 'categoria'=> 'elettronica', 'descrizione' => 'descrizione articolo 3'],
    ['titolo'=> 'Articolo 4', 'categoria'=> 'cucina', 'descrizione' => 'descrizione articolo 4']
];
    return view('articolo_completo',['articolo' => $articoli[$id]]);

})->name('articolo.dettagliato');

Route::get('/chi-sono', function () {
    return view('chi_sono', ['descrizione' => 'Ciao sono Alessandro Gennari']);
})->name('chi_sono');


