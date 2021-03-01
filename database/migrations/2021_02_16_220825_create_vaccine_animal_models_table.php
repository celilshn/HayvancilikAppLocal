<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccineAnimalModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine_animal_models', function (Blueprint $table) {
            $table->increments('vaccine_animal_id');
            $table->integer('id');
            $table->integer('animal_id');
            $table->integer('vaccine_id');
            $table->integer('dose_count');
            $table->dateTime('date');
            $table->dateTime('next_dose_date')->nullable(true);
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
        Schema::dropIfExists('vaccine_animal_models');
    }
}
