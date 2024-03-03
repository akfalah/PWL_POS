<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_kode' => 'BM',
                'kategori_nama' => 'Bahan Makanan',
            ],
            [
                'kategori_kode' => 'PRT',
                'kategori_nama' => 'Perlengkapan Rumah Tangga',
            ],
            [
                'kategori_kode' => 'PPK',
                'kategori_nama' => 'Perawatan Pribada & Kecantikan',
            ],
            [
                'kategori_kode' => 'EG',
                'kategori_nama' => 'Elektronik & Gadget',
            ],
            [
                'kategori_kode' => 'PA',
                'kategori_nama' => 'Pakaian & Aksesoris',
            ],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
