<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Http\Request;

class PokemonsController extends Controller
{
    public function index(Request $request) {
        $query = Pokemon::with('types:id,name,color_hex_t,color_hex_b')->orderBy('numero', 'asc');
        $pokemons = $query->paginate(12);
        return view('pokemon.index2')->with('pokemons', $pokemons);
    }

    public function getPokemon($num) {
        if (Pokemon::where('numero', $num)->exists()) {
            $pokemon = Pokemon::with('types:id,name,color_hex_t,color_hex_b')
                ->where('numero', $num)
                ->get();
            return view('pokemon.card')->with('pokemon', $pokemon[0]);
        } else {
            return response()->json([
              "message" => "Pokemon not found"
            ], 404);
        }
    }

    public function create() {
        $types = Type::all();
        $nextPokemonNumber = Pokemon::max('numero') + 1;
        return view('pokemon.create')
            ->with('types', $types)
            ->with('proximoNumero', $nextPokemonNumber);
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
        $request->type_2
        ? $pokemon->types()->sync([$request->type_1, $request->type_2])
        : $pokemon->types()->sync([$request->type_1]);

        return redirect()->route('pokemon.index');
    }

}
