<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Clear the table before seeding
        $users = [
            [
                
                "name" => "Admin",
                "email" => "admin@gamestore.com",
                "password" => Hash::make('admin'),
                "gender" => "Male",
                "date_of_birth" => Carbon::create('1980', '08', '18'),
                "role" => "admin",
                "remember_token" => NULL
            ],

            [
                
                "name" => "User",
                "email" => "user@gamestore.com",
                "password" => Hash::make('user'),
                "gender" => "Male",
                "date_of_birth" => Carbon::create('1980', '08', '18'),
                "role" => "customer",
                "remember_token" => NULL
            ],
        ];

        foreach ($users as $user) {
            User::insert($user);
        }
    }
}
