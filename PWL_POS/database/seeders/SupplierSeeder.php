<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_supplier')->insert([
        [
            'supplier_kode' => 'SUP01',
            'supplier_nama' => 'PT Nailah',
            'supplier_alamat' => 'Malang',
            'supplier_telepon' => '0811111111'
        ],
        [
            'supplier_kode' => 'SUP02',
            'supplier_nama' => 'PT Salsabila',
            'supplier_alamat' => 'Surabaya',
            'supplier_telepon' => '0822222222'
        ],
        [
            'supplier_kode' => 'SUP03',
            'supplier_nama' => 'PT Maulidiyah',
            'supplier_alamat' => 'Yogyakarta',
            'supplier_telepon' => '0833333333'
        ],
    ]);
    }
}
