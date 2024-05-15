<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class teleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepons = [
   ['no_telepon' => '0895671367613' ,'pengguna_id'=>1],
    ['no_telepon' => '0895671367613' ,'pengguna_id'=>2],
    ['no_telepon' => '0895671367613' ,'pengguna_id'=>3]
];
DB::table('telepons')->insert($telepons);

    }
}
