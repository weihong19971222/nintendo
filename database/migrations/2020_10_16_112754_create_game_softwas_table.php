<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameSoftwasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_softwas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('game_name');
            $table->string('game_image');
            $table->string('publisher');
            $table->boolean('language_chinese');
            $table->string('version');
            $table->string('date');
            $table->string('classification');
            $table->boolean('new_game');
            $table->string('game_type');
            $table->string('sort');
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
        Schema::dropIfExists('game_softwas');
    }
}
