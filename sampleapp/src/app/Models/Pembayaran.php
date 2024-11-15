<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    // Menonaktifkan penggunaan timestamp otomatis
    public $timestamps = false;

    // Daftar kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama',
        'jumlahpembayaran',
        'tanggalpembayaran'
    ];

    // Jika Anda ingin menggunakan format tanggal tertentu, Anda bisa menambahkan properti seperti berikut
    // protected $dates = ['tanggalpembayaran'];
}
