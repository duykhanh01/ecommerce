<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedInteger('cart_quantity');
            $table->unsignedInteger('colors_id');
            $table->foreign('colors_id')->references('id')->on('colors')->onDelete('cascade');
            $table->unsignedInteger('sizes_id');
            $table->foreign('sizes_id')->references('id')->on('sizes')->onDelete('cascade');
            $table->primary(['users_id','products_id','colors_id','sizes_id']);
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
        Schema::dropIfExists('carts');
    }
}
