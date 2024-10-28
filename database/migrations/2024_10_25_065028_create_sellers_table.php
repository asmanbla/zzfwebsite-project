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
        Schema::create('sellers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('account number',20);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->enum('roles', ['seller', 'admin_zzf'])->default('seller');
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
            $table->engine = 'InnoDB'; // Add this line
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};