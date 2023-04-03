<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_color_size', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_size_id');
            $table->foreign('product_size_id')->references('id')->on('product_sizes');
            $table->unsignedBigInteger('product_color_id');
            $table->foreign('product_color_id')->references('id')->on('product_colors');
            $table->integer('quantity');
            $table->decimal('price',10,2)->nullable();
            $table->decimal('dicount',10,2)->nullable();
            $table->integer('status')->default(1);  // status = 1 =active

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
        Schema::dropIfExists('product_color_sizes');
    }
};