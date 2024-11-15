<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TokoEmas;

class TokoEmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'Tipe' => 'Kalung',
                'Berat(gram)' => '50gram',
                'Harga' => 120000000

            ]
        ];

        foreach ($data as $dataclass) {
            TokoEmas::firstOrCreate([
                'Tipe' => $dataclass['Tipe'],
                'Berat(gram)' => $dataclass['Berat(gram)'],
                'Harga' => $dataclass['Harga']
            ]);
        }
    }
}