<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodCategoryModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_category_models', function (Blueprint $table) {
            $table->increments('food_category_id');
            $table->integer('id');
            $table->integer('food_id');
            $table->integer('category_id');
            $table->float('count');
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
        Schema::dropIfExists('food_category_models');
    }
}
