<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
    ['nama_pembeli' => 'ilham', 'jenis_kelamin' => 'laki-laki'],
    ['nama_pembeli' => 'indra', 'jenis_kelamin' => 'laki-laki'],
    ['nama_pembeli' => 'asep', 'jenis_kelamin' => 'laki-laki']
];
DB::table('pembelis')->insert($pembelis);

    }
}
