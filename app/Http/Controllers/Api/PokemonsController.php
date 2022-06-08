<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonsController extends Controller
{
    public function index() {
        $query = Pokemon::with('types:id,name,color_hex_t,color_hex_b');
        return $query->paginate(8);
    }

    public function getAllPokemons() {
        $pokemons = Pokemon::with('types:id,name,color_hex_t,color_hex_b')
            ->get()
            ->toJson(JSON_PRETTY_PRINT);
        return response($pokemons, 200);
    }

    public function getPokemon($num) {
        if (Pokemon::where('numero', $num)->exists()) {
            $pokemon = Pokemon::with('types:id,name,color_hex_t,color_hex_b')
                ->where('numero', $num)
                ->get()
                ->toJson(JSON_PRETTY_PRINT);
            return response($pokemon, 200);
        } else {
            return response()->json([
              "message" => "Pokemon not found"
            ], 404);
        }
    }

}
