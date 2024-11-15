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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id(); // Kolom ID sebagai primary key
            $table->string('nama'); // Kolom untuk nama pembayar
            $table->integer('jumlahpembayaran'); // Kolom untuk jumlah pembayaran
            $table->date('tanggalpembayaran'); // Kolom untuk tanggal pembayaran
            $table->timestamps(); // Kolom created_at dan updated_at (optional)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans'); // Menghapus tabel pembayarans jika rollback dilakukan
    }
};
