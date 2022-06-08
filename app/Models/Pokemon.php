<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokemons';

    protected $fillable = [
        'numero',
        'name',
        'hp',
        'attack',
        'defense',
        'special_attack',
        'special_defense',
        'speed',
    ];

    public function types() {
        return $this->belongsToMany(Type::class, 'pokemon_types', 'pokemon_id', 'type_id');
    }

    public function types2() {
        return $this->hasMany(PokemonType::class);
    }

    /**
     * Verifica se existe o index $i no array de tipos
     */
    public function verifyType(int $i): bool {
        return $this->types->count() > $i
        ? true
        : false;
    }

    public function getImage(int $i, int $numeroPokemon):string {
        switch ($i) {
            case 1:
                return "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/$numeroPokemon.png";
                break;
            case 2:
                return "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/versions/generation-v/black-white/animated/$numeroPokemon.gif";
                break;
            case 3:
                return "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/$numeroPokemon.png";
                break;
            default:
                return null;
                break;
        }
    }

}
