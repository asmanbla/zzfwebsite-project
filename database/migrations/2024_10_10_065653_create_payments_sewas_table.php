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
        Schema::create('payments_sewas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sewas_id');
            $table->foreign('sewas_id')->references('id')->on('sewas')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('payment_date');
            $table->enum('payment_method', ['Cash', 'Transfer', 'Qris'])->default('Cash');
            $table->bigInteger('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments_sewas');
    }
};
