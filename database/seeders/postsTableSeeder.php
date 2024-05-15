<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts=[
            ['title'=>'tips cepat pintar','content'=>'lorem ipsum'],
             ['title'=>'Harus berfikir positif','content'=>'lorem ipsum'],
              ['title'=>'Membangun visi misi sukses','content'=>'lorem ipsum']
        ];
        DB::table('posts')->insert($posts);
    }
}
