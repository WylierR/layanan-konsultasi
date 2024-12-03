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
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('instansi');
            $table->string('nomor_telepon');
            $table->string('jenis_layanan');
            $table->string('pilih_layanan');
            $table->date('tanggal');
            $table->string('waktu');
            $table->string('permasalahan');
            $table->string('link')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
