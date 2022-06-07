<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('numero')->after('id');
            $table->string('name');
            $table->unsignedTinyInteger('hp');
            $table->unsignedTinyInteger('attack');
            $table->unsignedTinyInteger('defense');
            $table->unsignedTinyInteger('special_attack');
            $table->unsignedTinyInteger('special_defense');
            $table->unsignedTinyInteger('speed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemons');
    }
}
