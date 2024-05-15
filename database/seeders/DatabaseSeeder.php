<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(postsTableSeeder::class);
        $this->call(barangsTableSeeder::class);
        $this->call(SiswasTableSeeder::class);
        $this->call(penggunasTableSeeder::class);
        $this->call(teleponsTableSeeder::class);
        $this->call(merksTableSeeder::class);
        $this->call(produksTableSeeder::class);
        $this->call(barangs2TableSeeder::class);
        $this->call(pembelisTableSeeder::class);
        $this->call(transaksisTableSeeder::class);

        // $this->call(barangsTableSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
