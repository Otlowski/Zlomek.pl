<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('firstname')->after('remember_token');
            $table->string('surname')->after('firstname');
            $table->string('location')->after('surname');
            $table->string('phone_number')->after('location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('users', function ($table) {
            $table->dropColumn('firstname');   
            $table->dropColumn('surname');
            $table->dropColumn('location');
            $table->dropColumn('phone_number');
        });
    }
}
