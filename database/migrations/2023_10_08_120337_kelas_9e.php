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
        Schema::create('kelas 9e', function (Blueprint $table) {
            $table->increments('Id');
            $table->char('Nama Lengkap', 60);
            $table->boolean('Gender');
            $table->char('Asal Kota', 25);
            $table->char('Agama', 20);
            $table->date('Tanggal Lahir');
            $table->integer('Tinggi Badan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas 9e');
    }
};
