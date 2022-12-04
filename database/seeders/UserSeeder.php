<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@bboard.com',
            'password' => Hash::make('lol123')
        ]);

        for ($i = 0; $i <= 10; $i++) {
            User::create([
                'name' => fake()->firstName . " " . fake()->lastName,
                'email' => fake()->email,
                'password' => Hash::make('12345678')
            ]);
        }
    }
}
