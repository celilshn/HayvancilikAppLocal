<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalMonthModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_month_models', function (Blueprint $table) {
            $table->increments('animal_month_id');
            $table->integer('id');
            $table->string('name');
            $table->integer('animal_id');
            $table->integer('category_id');
            $table->integer('activity_id');
            $table->integer('number');
            $table->dateTime('birth_day');
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
        Schema::dropIfExists('animal_month_models');
    }
}
