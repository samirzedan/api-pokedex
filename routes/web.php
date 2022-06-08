<?php

use App\Http\Controllers\PokemonsController;
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

Route::get('/', function () {
    return redirect()->route('pokemon.index');
});

Route::resource('pokemon', PokemonsController::class)->except(['show', 'destroy']);

Route::get('/pokemon/{num}', [PokemonsController::class, 'getPokemon'])->name('pokemon.card');
