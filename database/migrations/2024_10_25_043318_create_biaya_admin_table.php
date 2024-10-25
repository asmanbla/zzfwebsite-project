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
        Schema::create('biaya_admin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_sellers_id')->nullable();
            $table->unsignedBigInteger('sewa_sellers_id')->nullable();
            $table->tinyInteger('percentage')->unsigned(); // For 0 to 100 values
            $table->timestamps();
            //foreign key
            $table->foreign('order_sellers_id')->references('id')->on('order_sellers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sewa_sellers_id')->references('id')->on('sewa_sellers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biaya_admin');
    }
};
