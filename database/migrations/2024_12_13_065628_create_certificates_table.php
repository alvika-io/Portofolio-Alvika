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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('issued_at');
            $table->string('issued_by');
            $table->string('file');
            $table->string('thumbnail')->nullable();
            $table->timestamps();
        });
    }
    
};
