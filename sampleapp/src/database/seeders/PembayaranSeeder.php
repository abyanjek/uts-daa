<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pembayaran; // Pastikan menggunakan model yang sesuai

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data pembayaran yang ingin dimasukkan ke dalam tabel
        $pembayaran = [
            [
                'nama' => 'John Doe',
                'jumlahpembayaran' => 1000000,
                'tanggalpembayaran' => '2024-11-15'
            ],
            [
                'nama' => 'Jane Smith',
                'jumlahpembayaran' => 500000,
                'tanggalpembayaran' => '2024-11-14'
            ],
            [
                'nama' => 'Michael Johnson',
                'jumlahpembayaran' => 750000,
                'tanggalpembayaran' => '2024-11-13'
            ],
            // Anda bisa menambahkan data lainnya jika diperlukan
        ];

        // Loop untuk menyimpan data ke dalam tabel 'pembayarans'
        foreach ($pembayaran as $dataclass) {
            DataPembayaran::firstOrCreate([
                'nama' => $dataclass['nama'],
                'jumlahpembayaran' => $dataclass['jumlahpembayaran'],
                'tanggalpembayaran' => $dataclass['tanggalpembayaran']
            ]);
        }
    }
}
