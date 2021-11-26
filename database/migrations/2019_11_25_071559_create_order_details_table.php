<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->unsignedBigInteger('orders_id');
            $table->unsignedBigInteger('products_id');
            #od_quantity, od_price, color_id, size_id
            $table->double('od_price');
            $table->unsignedBigInteger('colors_id');
            $table->unsignedBigInteger('sizes_id');
            $table->timestamps();
            $table->primary(['orders_id', 'products_id']);
            $table->foreign('orders_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
