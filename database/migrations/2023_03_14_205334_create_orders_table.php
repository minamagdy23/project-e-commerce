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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('status')->default(0); //
            $table->string('payment_method');
            $table->string('payment_status');
            $table->string('payment_id');
            $table->decimal('total_price');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('name');
            $table->string('surname');
            $table->string('city');
            $table->string('postal_code');
            $table->string('country');
            $table->string('shipping_price');
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
        Schema::dropIfExists('orders');
    }
};