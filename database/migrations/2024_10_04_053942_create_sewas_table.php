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
        Schema::create('sewas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customers_id');
            $table->foreign('customers_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('start_date'); 
            $table->dateTime('finish_date'); 
            $table->bigInteger('total_amount'); 
            $table->enum('status', ['menunggu pembayaran', 'diproses', 'dikirim', 'digunakan', 'dikembalikan', 'selesai'])->default('menunggu pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewas');
    }
};
