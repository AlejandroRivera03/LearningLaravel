<?php

use Illuminate\Support\Facades\Route;

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


// Opcion recomendada para vistas estaticas como politicas de privacidad,
// terminos y condiciones, paginas que no requieren mucha logica
// Route::view('/', 'home', ['nombre' => 'Alejandrooo'])->name('home'); 

// Para vistas mas variables y que necesitan mas logica
Route::get('/', function () {
    return view('home');
    
    # WAYS TO SEND VARIABLES TO THE VIEWS
    // $nombre = 'Alejandroo';
    // return view('home')->with('nombre', $nombre);
    // return view('home')->with(['nombre' => $nombre]);
    // return view('home', ['nombre' => $nombre]);
    // return view('home', compact('nombre'));
})->name('home');

Route::view('/about', 'about')->name('about');

// Route::view('/portafolio', 'portafolio')->name('portafolio');
Route::get('/portafolio', 'PortfolioController@index')->name('portfolio');

Route::view('/contact', 'contact')->name('contact');
