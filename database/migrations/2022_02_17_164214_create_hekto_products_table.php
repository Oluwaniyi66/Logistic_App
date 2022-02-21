<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHektoProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hekto_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('discount');
            $table->string('p_image')->nullable();
            $table->string('p_category');
            $table->string('s_desc');
            $table->string('l_desc');
            $table->string('pd_img1')->nullable();
            $table->string('pd_img2')->nullable();
            $table->string('pd_img3')->nullable();
            $table->string('pd_img4')->nullable();
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
        Schema::dropIfExists('hekto_products');
    }
}
