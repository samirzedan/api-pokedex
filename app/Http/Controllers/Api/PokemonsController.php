<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonsController extends Controller
{
    public function index(Request $request) {
        $query = Pokemon::with('types:id,name');

        if($request->name !== null) {
            $query->where('name', $request->name);
        }

        // return $query->paginate(3);
        return $query->get();
    }
}
