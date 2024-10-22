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
        Schema::create('product_categories_sellers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sellers_id');
            $table->enum('kategori', ['alat', 'komponen', 'bundling'])->default('alat');
            $table->timestamps();
            // Foreign Key Constraint
            $table->foreign('sellers_id')->references('id')->on('sellers')->onDelete('cascade');
            $table->engine = 'InnoDB'; // Add this line
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_categories_sellers');
    }
};