<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryMonthModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_month_models', function (Blueprint $table) {
            $table->increments('category_month_id');
            $table->integer('id');
            $table->integer('category_id');
            $table->string('name');
            $table->float('weight_rate');
            $table->boolean('gender');
            $table->boolean('milkable');
            $table->float('milk_count');
            $table->integer('sell_price');
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
        Schema::dropIfExists('category_month_models');
    }
}
