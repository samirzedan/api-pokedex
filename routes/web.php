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

Route::get('/pokemon', function () {
    return view('pokemon.index');
});

Route::resource('pokemon', PokemonsController::class)->except(['show']);

// Route::get('/pokemon', [PokemonsController::class, 'index'])->name('pokemon.index');
// Route::post('/pokemon', [PokemonsController::class, 'store'])->name('pokemon.store');
Route::get('/pokemon/create', [PokemonsController::class, 'create'])->name('pokemon.create');
