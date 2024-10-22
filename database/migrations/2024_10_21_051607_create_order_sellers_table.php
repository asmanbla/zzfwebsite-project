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
        Schema::create('order_sellers', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('sellers_id');
                $table->unsignedBigInteger('customers_id');
                $table->foreign('customers_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
                $table->dateTime('order_date'); 
                $table->bigInteger('total_amount'); 
                $table->enum('status', ['menunggu pembayaran', 'diproses', 'selesai'])->default('menunggu pembayaran');
                $table->timestamps();
                //Foreign Key Constraint
                $table->foreign('sellers_id')->references('id')->on('sellers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_sellers');
    }
};