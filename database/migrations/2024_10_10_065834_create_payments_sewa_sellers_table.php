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
        Schema::create('payments_sewa_sellers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sellers_id');
            $table->unsignedBigInteger('sewa_sellers_id');
            $table->foreign('sewa_sellers_id')->references('id')->on('sewa_sellers')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('payment_date');
            $table->enum('payment_method', ['Cash', 'Transfer', 'Qris'])->default('Cash');
            $table->bigInteger('amount');
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
        Schema::dropIfExists('payments_sewa_sellers');
    }
};
