<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->string('shop_name')->unique();
            $table->string('product_name');
            $table->string('product_price');
            $table->string('product_stock')->unique();
            $table->string('product_video');
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
        Schema::dropIfExists('products');
    }
}
