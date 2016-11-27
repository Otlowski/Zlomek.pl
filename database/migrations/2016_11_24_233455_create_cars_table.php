<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users__id');
            $table->integer('junkyards__id');
            $table->string('car_brand');
            $table->string('car_model');
            $table->string('price');
            $table->string('production_year');
            $table->string('mileage');
            $table->enum('fuel',['petrol','diesel','gas']);
            $table->integer('power');
            $table->string('capacity');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cars');
    }
}
