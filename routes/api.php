<?php

use App\Http\Controllers\Api\PokemonsController;
use App\Http\Controllers\Api\TypesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pokemon', [PokemonsController::class, 'index']);
Route::post('/pokemon', [PokemonsController::class, 'store']);
Route::get('/pokemon/{name}', [PokemonsController::class, 'index']);
Route::get('/type', [TypesController::class, 'index']);
