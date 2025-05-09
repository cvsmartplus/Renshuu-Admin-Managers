<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama'); // Nama pendaftar
            $table->string('id_pendaftar')->unique(); // ID pendaftar
            $table->date('tanggal_pendaftar'); // Tanggal pendaftar
            $table->string('status'); // Status pendaftar: Aktif / Tidak Aktif
            $table->timestamps(); // Timestamps jika kamu ingin mencatat waktu pembuatan dan update
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftars');
    }
}
