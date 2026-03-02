<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

    for ($i = 1; $i <= 15; $i++) {
        $data[] = [
            'barang_id' => $i,
            'user_id' => 1,
            'tanggal_stok' => now(),
            'jumlah_stok' => 30, // jumlah tetap supaya rapi
        ];
    }

    DB::table('t_stok')->insert($data);
    }
}
