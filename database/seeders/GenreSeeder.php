<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Clear the table before seeding
        $genres = [
            [
                
                "genre_name" => "RPG",
            ],
            [
                
                "genre_name" => "FPS",
            ],
            [
                
                "genre_name" => "Open World",
            ],
            [
                
                "genre_name" => "MMORPG",
            ],
            [
                
                "genre_name" => "Survival",
            ],
        ];

        foreach ($genres as $genre) {
            Genre::insert($genre);
        }
    }
}
