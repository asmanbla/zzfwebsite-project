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
        Schema::create('payments_sellers', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('order_sellers_id');
                $table->foreign('order_sellers_id')->references('id')->on('order_sellers')->onDelete('cascade')->onUpdate('cascade');
                $table->unsignedBigInteger('sewa_sellers_id');
                $table->foreign('sewa_sellers_id')->references('id')->on('sewa_sellers')->onDelete('cascade')->onUpdate('cascade');
                $table->dateTime('payment_date');
                $table->string('payment_method',255); 
                $table->bigInteger('amount');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments_sellers');
    }
};
