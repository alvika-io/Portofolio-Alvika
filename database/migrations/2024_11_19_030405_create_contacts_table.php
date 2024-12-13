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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();                       // Kolom ID sebagai primary key
            $table->string('name');             // Nama
            $table->string('email');            // Email (gunakan validasi di model)
            $table->string('phone');            // Nomor telepon
            $table->string('socialmedia');      // Platform media sosial
            $table->timestamps();               // Timestamps (created_at, updated_at)
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};