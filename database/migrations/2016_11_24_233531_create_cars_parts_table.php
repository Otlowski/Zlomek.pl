<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_parts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users__id');
            $table->integer('junkyards__id');
            $table->string('name');
            $table->string('car_brand');
            $table->string('car_model');
            $table->string('production_year');
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
        Schema::drop('cars_parts');
    }
}
