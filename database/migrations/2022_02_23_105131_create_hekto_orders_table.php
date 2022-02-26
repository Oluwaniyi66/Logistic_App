<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHektoOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hekto_orders', function (Blueprint $table) {
            $table->id();
            $table->string('userId');
            $table->string('userName');
            $table->string('userEmail');
            $table->string('paymentReference');
            $table->string('paymentTxId');
            $table->string('paymentStatus');
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
        Schema::dropIfExists('hekto_orders');
    }
}
