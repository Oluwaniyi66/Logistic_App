<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHektoShipUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hekto_ship_users', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('fname');
            $table->string('lname');
            $table->string('address');
            $table->string('suit');
            $table->string('city');
            $table->string('country');
            $table->string('code');
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
        Schema::dropIfExists('hekto_ship_users');
    }
}
