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
        for ($i=1; $i<=10; $i++) {

        $total = 0;

        for ($j=1; $j<=3; $j++) {

            $barang = DB::table('m_barang')->inRandomOrder()->first();
            $jumlah = rand(1,3);
            $subtotal = $jumlah * $barang->harga_jual;

            DB::table('t_penjualan_detail')->insert([
                'penjualan_id' => $i,
                'barang_id' => $barang->barang_id,
                'jumlah' => $jumlah,
                'harga' => $barang->harga_jual,
                'subtotal' => $subtotal,
            ]);

            $total += $subtotal;
        }

        // Update total harga di t_penjualan
        DB::table('t_penjualan')
            ->where('penjualan_id', $i)
            ->update(['total_harga' => $total]);
        }
    }
}

