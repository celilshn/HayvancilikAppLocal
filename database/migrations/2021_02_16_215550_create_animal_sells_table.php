<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_sells', function (Blueprint $table) {
            $table->increments('animal_sell_id');
            $table->integer('id');
            $table->integer('animal_id');
            $table->integer('user_id');
            $table->float('self_price');
            $table->float('count');
            $table->text('reason')->nullable(true);
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
        Schema::dropIfExists('animal_sells');
    }
}
