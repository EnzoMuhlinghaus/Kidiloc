<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarRentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_rent', function (Blueprint $table) {
          $table->integer('car_id')->unsigned();
          $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');

          $table->integer('rent_id')->unsigned();
          $table->foreign('rent_id')->references('id')->on('rents')->onDelete('cascade');

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
        Schema::dropIfExists('car_rent');
    }
}
