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
        Schema::create('sewa_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('products_zzfs_id');
            $table->foreign('products_zzfs_id')->references('id')->on('products_zzfs')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('sewas_id');
            $table->foreign('sewas_id')->references('id')->on('sewas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('sewa_details');
    }
};
