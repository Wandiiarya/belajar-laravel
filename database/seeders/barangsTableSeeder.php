<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
    ['nama' => 'tips cepat pintar', 'jumlah' => 8],
    ['nama' => 'Harus berfikir positif', 'jumlah' => 9],
    ['nama' => 'Membangun visi misi sukses', 'jumlah' => 5]
];
DB::table('barangs')->insert($barangs);

    }
}
