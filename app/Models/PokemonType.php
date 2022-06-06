<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonType extends Model
{
    use HasFactory;

    protected $fillable = [
        'pokemon_id',
        'type_id',
    ];

    public function type() {
        return $this->belongsTo(Type::class);
    }
}
