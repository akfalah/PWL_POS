<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            $pembeli = 'Pembeli ' . $i;
            $penjualan_kode = 'PYMNT0' . $i;

            $data[] = [
                'user_id' => 3,
                'pembeli' => $pembeli,
                'penjualan_kode' => $penjualan_kode,
                'penjualan_tanggal' => now(),
            ];
        }

        DB::table('t_penjualan')->insert($data);
    }
}
