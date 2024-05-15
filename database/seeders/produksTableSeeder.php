<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
    ['nama_produk' => 'samsung A20', 'jumlah' => 140, 'tanggal_produksi' => '2020-09-20', 'id_merk' => '1'],
    ['nama_produk' => 'samsung S20', 'jumlah' => 200, 'tanggal_produksi' => '2019-06-07', 'id_merk' => '1'],
    ['nama_produk' => 'samsung J2prem', 'jumlah' => 90, 'tanggal_produksi' => '2011-04-11', 'id_merk' => '1' ],
     ['nama_produk' => 'oppo A54', 'jumlah' => 140, 'tanggal_produksi' => '2020-09-10', 'id_merk' => '2'],
    ['nama_produk' => 'oppo A53', 'jumlah' => 200, 'tanggal_produksi' => '2019-06-19', 'id_merk' => '2'],
    ['nama_produk' => 'opppo F8', 'jumlah' => 90, 'tanggal_produksi' => '2011-04-21', 'id_merk' => '2' ],
     ['nama_produk' => 'Vivi Y19', 'jumlah' => 140, 'tanggal_produksi' => '2020-09-20', 'id_merk' => '3'],
    ['nama_produk' => 'Vivo Y90', 'jumlah' => 200, 'tanggal_produksi' => '2019-06-19', 'id_merk' => '3'],
    ['nama_produk' => 'Vivo Y80', 'jumlah' => 90, 'tanggal_produksi' => '2011-04-11', 'id_merk' => '3' ]
];
DB::table('produks')->insert($produks);

    }
}
