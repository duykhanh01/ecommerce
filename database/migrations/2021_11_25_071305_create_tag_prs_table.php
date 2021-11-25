<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagPrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_prs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tags_id');
            $table->foreign('tags_id')->references('id')->on('tags')->onDelete('cascade');
            $table->unsignedBigInteger('products_id');
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
        Schema::dropIfExists('tag_prs');
    }
}
