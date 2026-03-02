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
       $barang = [
        // Supplier 1 - PT Nailah
        ['kategori_id'=>1,'supplier_id'=>1,'barang_kode'=>'BRG001','barang_nama'=>'Snack Coklat','harga_beli'=>5000,'harga_jual'=>8000],
        ['kategori_id'=>2,'supplier_id'=>1,'barang_kode'=>'BRG002','barang_nama'=>'Teh Botol','harga_beli'=>3000,'harga_jual'=>6000],
        ['kategori_id'=>3,'supplier_id'=>1,'barang_kode'=>'BRG003','barang_nama'=>'Lipstik','harga_beli'=>20000,'harga_jual'=>35000],
        ['kategori_id'=>4,'supplier_id'=>1,'barang_kode'=>'BRG004','barang_nama'=>'Pulpen','harga_beli'=>2000,'harga_jual'=>5000],
        ['kategori_id'=>5,'supplier_id'=>1,'barang_kode'=>'BRG005','barang_nama'=>'Mouse','harga_beli'=>50000,'harga_jual'=>75000],

        // Supplier 2 - PT Salsabila
        ['kategori_id'=>1,'supplier_id'=>2,'barang_kode'=>'BRG006','barang_nama'=>'Biskuit','harga_beli'=>4000,'harga_jual'=>7000],
        ['kategori_id'=>2,'supplier_id'=>2,'barang_kode'=>'BRG007','barang_nama'=>'Air Mineral','harga_beli'=>2000,'harga_jual'=>5000],
        ['kategori_id'=>3,'supplier_id'=>2,'barang_kode'=>'BRG008','barang_nama'=>'Bedak','harga_beli'=>15000,'harga_jual'=>25000],
        ['kategori_id'=>4,'supplier_id'=>2,'barang_kode'=>'BRG009','barang_nama'=>'Buku Tulis','harga_beli'=>3000,'harga_jual'=>6000],
        ['kategori_id'=>5,'supplier_id'=>2,'barang_kode'=>'BRG010','barang_nama'=>'Keyboard','harga_beli'=>70000,'harga_jual'=>100000],

        // Supplier 3 - PT Maulidiyah
        ['kategori_id'=>1,'supplier_id'=>3,'barang_kode'=>'BRG011','barang_nama'=>'Permen','harga_beli'=>1000,'harga_jual'=>3000],
        ['kategori_id'=>2,'supplier_id'=>3,'barang_kode'=>'BRG012','barang_nama'=>'Kopi Sachet','harga_beli'=>2000,'harga_jual'=>5000],
        ['kategori_id'=>3,'supplier_id'=>3,'barang_kode'=>'BRG013','barang_nama'=>'Shampoo','harga_beli'=>12000,'harga_jual'=>20000],
        ['kategori_id'=>4,'supplier_id'=>3,'barang_kode'=>'BRG014','barang_nama'=>'Pensil','harga_beli'=>1000,'harga_jual'=>3000],
        ['kategori_id'=>5,'supplier_id'=>3,'barang_kode'=>'BRG015','barang_nama'=>'Flashdisk','harga_beli'=>40000,'harga_jual'=>60000],
    ];

    DB::table('m_barang')->insert($barang);
    }
}
