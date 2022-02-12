<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qoutes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('freight');
            $table->string('email');
            $table->string('phone');
            $table->string('distance');
            $table->string('weight');
            $table->string('pickup');
            $table->string('dropoff');
            $table->string('trackingID');
            $table->string('amount');
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
        Schema::dropIfExists('qoutes');
    }
}
