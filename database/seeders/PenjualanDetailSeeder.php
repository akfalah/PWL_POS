<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $penjualan_id = 1;

        for ($i = 1; $i <= 30; $i++) {
            $barang_id = rand(1, 10); // Random barang_id between 1 and 10
            $jumlah = rand(1, 10); // Random quantity between 1 and 10

            // Get harga_jual from barang table
            $harga = DB::table('m_barang')->where('barang_id', $barang_id)->value('harga_jual');

            $data[] = [
                'penjualan_id' => $penjualan_id,
                'barang_id' => $barang_id,
                'harga' => $harga,
                'jumlah' => $jumlah,
            ];

            if ($i % 3 == 0) {
                $penjualan_id++;
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
