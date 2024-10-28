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
        Schema::create('product_sellers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sellers_id');
            $table->unsignedBigInteger('product_category_id');
            $table->foreign('product_category_id')->references('id')->on('product_categories_sellers')->onDelete('cascade')->onUpdate('cascade');
            $table->string('product_name',100);
            $table->text('description');
            $table->enum('type', ['rent', 'purchase', 'rent_and_purchase'])->default('rent_and_purchase');
            $table->integer('purchase_price')->nullable();
            $table->integer('rent_price')->nullable();
            $table->integer('stok_quantity');
            $table->string('image1_url',255); 
            $table->string('image2_url',255) ->nullable(); 
            $table->string('image3_url',255) ->nullable();
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
        Schema::dropIfExists('product_sellers');
    }
};