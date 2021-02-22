<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->integer('series_id')->nullable();
            $table->integer('match_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('first_team_id')->nullable();
            $table->integer('second_team_id')->nullable();
            $table->string('venue')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('games');
    }
}
