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
        Schema::create('sewa_details_sellers', function (Blueprint $table) {
            $table->unsignedBigInteger('product_sellers_id');
            $table->foreign('product_sellers_id')->references('id')->on('product_sellers')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('sewa_sellers_id');
            $table->foreign('sewa_sellers_id')->references('id')->on('order_sellers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('sewa_details_sellers');
    }
};
