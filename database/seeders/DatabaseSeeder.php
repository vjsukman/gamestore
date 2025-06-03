<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('users')->truncate();
        DB::table('genres')->truncate();
        DB::table('games')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $this->call([
            GenreSeeder::class,
            UserSeeder::class,
            GameSeeder::class
        ]);
    }
}
