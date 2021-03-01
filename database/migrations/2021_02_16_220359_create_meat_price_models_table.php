<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeatPriceModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meat_price_models', function (Blueprint $table) {
            $table->increments('meat_price_id');
            $table->integer('id');
            $table->float('price');
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
        Schema::dropIfExists('meat_price_models');
    }
}
