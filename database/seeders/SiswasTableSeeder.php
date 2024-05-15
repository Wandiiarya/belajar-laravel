<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Siswas= [
            ['nama' => 'abdu', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'islam', 'telepon' => 4543661,'email' => 'Abdullah@gmail.com'],
            ['nama' => 'ilham', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'sayati', 'agama' => 'islam', 'telepon' => 4543662, 'email' => 'ilham@gmail.com'],
            ['nama' => 'indra', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'sayuran', 'agama' => 'islam', 'telepon' => 4543663,'email' => 'indra@gmail.com'],
            ['nama' => 'saiful', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'kopo', 'agama' => 'islam', 'telepon' => 4543664,'email' => 'saiful@gmail.com'],
            ['nama' => 'ikbal', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'margahayu', 'agama' => 'islam', 'telepon' => 4543665,'email' => 'ikbal@gmail.com'],
            ['nama' => 'nasrullah', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'cibaduyut', 'agama' => 'islam', 'telepon' => 4543666,'email' => 'nasrullah@gmail.com'],
            ['nama' => 'bekti', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'islam', 'telepon' => 4543664,'email' => 'bekti@gmail.com'],
            ['nama' => 'ihsan', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'sayati', 'agama' => 'islam', 'telepon' => 4543667,'email' => 'ihsan@gmail.com'],
            ['nama' => 'faza', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'margahayu', 'agama' => 'islam', 'telepon' => 4543668,'email' => 'faza@gmail.com'],
            ['nama' => 'rikzan', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'islam', 'telepon' => 4543669,'email' => 'rikzan@gmail.com']

        ];
        DB::table('Siswas')->insert($Siswas);

    }
}
