<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('skills', function (Blueprint $table) {
        $table->string('logo')->nullable(); // Menambahkan kolom logo
    });
}

public function down()
{
    Schema::table('skills', function (Blueprint $table) {
        $table->dropColumn('logo');
    });
}

};