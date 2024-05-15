<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class transaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
    ['id_barang' =>  1, 'id_pembeli' => 1,'jumlah' => 81, 'tanggal' => '2020-09-20' ],
    ['id_barang' =>  2, 'id_pembeli' => 2,'jumlah' => 82, 'tanggal' => '2019-06-07' ],
    ['id_barang' =>  3, 'id_pembeli' => 3,'jumlah' => 83, 'tanggal' => '2011-04-11' ],

];
DB::table('transaksis')->insert($transaksis);

    }
}
