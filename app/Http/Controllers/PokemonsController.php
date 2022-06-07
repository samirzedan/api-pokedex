<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Http\Request;

class PokemonsController extends Controller
{
    public function index() {
        $pokemons = Pokemon::with('types:id,name,color_hex_t,color_hex_b')->get();
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
        return redirect(route('pokemon.index'));
    }

    public function edit(Pokemon $pokemon) {
        $types = Type::all();
        return view('pokemon.edit')
            ->with('types', $types)
            ->with('pokemon', $pokemon);
    }

    public function update(Pokemon $pokemon, Request $request) {
        $pokemon->fill($request->all());
        $pokemon->save();

        return redirect()->route('pokemon.index');
    }

}
