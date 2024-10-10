<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_details_sellers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_sellers_id');
            $table->foreign('product_sellers_id')->references('id')->on('product_sellers')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('order_sellers_id');
            $table->foreign('order_sellers_id')->references('id')->on('order_sellers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantity');
            $table->integer('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details_sellers');
    }
};
