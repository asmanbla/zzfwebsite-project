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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('products_zzfs_id');
            $table->unsignedBigInteger('products_sellers_id');
            $table->string('quantity')-> nullable();
            $table->string('total')->nullable();
            $table->string('endtotal')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('products_zzfs_id')->references('id')->on('products_zzfs')->onDelete('cascade');
            $table->foreign('products_sellers_id')->references('id')->on('product_sellers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
