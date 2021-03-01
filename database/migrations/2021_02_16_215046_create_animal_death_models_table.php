<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalDeathModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_death_models', function (Blueprint $table) {
            $table->increments('animal_death_id');
            $table->integer('id');
            $table->integer('animal_id');
            $table->text('reason')->nullable(true);
            $table->integer('price');
            $table->dateTime('date');
            $table->integer('company_id');
            $table->integer('sequence_id');
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
        Schema::dropIfExists('animal_death_models');
    }
}
