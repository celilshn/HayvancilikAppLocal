<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_models', function (Blueprint $table) {
            $table->increments('table_id');
            $table->integer('id');
            $table->string('name')->nullable(true);
            $table->integer('nBirth');
            $table->integer('nSplit');
            $table->integer('nNotSemination');
            $table->integer('expired_days');
            $table->boolean('unLimited');
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
        Schema::dropIfExists('table_models');
    }
}
