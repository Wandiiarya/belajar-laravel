<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangs2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs2 = [
    ['nama_barang' => 'buku gambar', 'harga' => 8000, 'stok' =>3534],
    ['nama_barang' => 'buku tulis', 'harga' => 9000, 'stok' =>245],
    ['nama_barang' => 'pensil', 'harga' => 5000, 'stok' =>546],
];
DB::table('barangs2')->insert($barangs2);

    }
}
