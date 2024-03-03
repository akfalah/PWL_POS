<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'BM001',
                'barang_nama' => 'Beras',
                'harga_beli' => 70000,
                'harga_jual' => 100000,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BM002',
                'barang_nama' => 'Minyak',
                'harga_beli' => 30000,
                'harga_jual' => 45000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'PRT001',
                'barang_nama' => 'Sabun Cuci Piring',
                'harga_beli' => 20000,
                'harga_jual' => 30000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'PRT002',
                'barang_nama' => 'Tisu',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'PPK001',
                'barang_nama' => 'Shampoo',
                'harga_beli' => 15000,
                'harga_jual' => 25000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'PPK002',
                'barang_nama' => 'Pasta Gigi',
                'harga_beli' => 15000,
                'harga_jual' => 25000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'EG001',
                'barang_nama' => 'Smartphone',
                'harga_beli' => 3000000,
                'harga_jual' => 4000000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'EG002',
                'barang_nama' => 'Earphone',
                'harga_beli' => 200000,
                'harga_jual' => 350000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'PA001',
                'barang_nama' => 'Kaos',
                'harga_beli' => 150000,
                'harga_jual' => 250000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'PA002',
                'barang_nama' => 'Kacamata Hitam',
                'harga_beli' => 120000,
                'harga_jual' => 150000,
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}
