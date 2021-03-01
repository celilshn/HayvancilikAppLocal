<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals_models', function (Blueprint $table) {
            $table->increments('animals_id');
            $table->integer('id');
            $table->string('name');
            $table->integer('category_id');
            $table->integer('activity_id');
            $table->integer('number');
            $table->dateTime('birth_day');
            $table->dateTime('created_at');
            $table->integer('company_id');
            $table->integer('sequence_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals_models');
    }
}
