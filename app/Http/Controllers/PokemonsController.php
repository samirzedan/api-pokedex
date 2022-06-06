<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\PokemonType;
use App\Models\Type;
use Illuminate\Http\Request;

class PokemonsController extends Controller
{
    public function index() {
        $pokemons = Pokemon::all();
        return view('pokemon.index')->with('pokemons', $pokemons);
    }

    public function create() {
        $types = Type::all();
        return view('pokemon.create')->with('types', $types);
    }

    public function store(Request $request) {
        $pokemon = Pokemon::create($request->all());
        $request->type_2
        ? $pokemon->types()->sync([$request->type_1, $request->type_2])
        : $pokemon->types()->sync([$request->type_1]);
        // PokemonType::insert([
        //     ['pokemon_id' => $pokemon->id, 'type_id' => $request->type_1],
        //     [$pokemon->id, $request->type_2]
        // ]);
        return redirect(route('pokemon.index'));
    }

}
