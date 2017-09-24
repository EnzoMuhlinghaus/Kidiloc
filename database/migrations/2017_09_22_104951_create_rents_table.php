<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
          $table->increments('id');
          $table->date('rent_date_beginning');
          $table->date('rent_date_ending');
          $table->string('customer_email');
          $table->integer('car_id')->unsigned();
          $table->foreign('car_id')->references('id')->on('cars');
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
        Schema::dropIfExists('rents');
    }
}
