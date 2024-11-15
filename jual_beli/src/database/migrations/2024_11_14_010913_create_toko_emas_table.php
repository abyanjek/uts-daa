<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel data_pembayarans.
     */
    public function up(): void
    {
        Schema::create('data_pembayarans', function (Blueprint $table) {
            $table->id(); // Kolom id yang auto increment
            $table->string('nama'); // Nama pembeli
            $table->string('barang'); // Nama barang yang dibeli
            $table->decimal('jumlah', 15, 2); // Jumlah pembayaran dengan format desimal
            $table->string('metode'); // Metode pembayaran (Transfer, Tunai, Kartu Kredit, dll)
            $table->date('tanggal'); // Tanggal pembayaran
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Membalikkan migrasi dengan menghapus tabel data_pembayarans.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pembayarans');
    }
};
