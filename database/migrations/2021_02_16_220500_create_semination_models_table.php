<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminationModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semination_models', function (Blueprint $table) {
            $table->increments('semination_id');
            $table->integer('id');
            $table->integer('mom_id');
            $table->integer('dad_id');
            $table->integer('child_id');
            $table->dateTime('split_date')->nullable(true);
            $table->dateTime('date')->nullable(true);
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
        Schema::dropIfExists('semination_models');
    }
}
