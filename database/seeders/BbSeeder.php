<?php

namespace Database\Seeders;

use App\Models\Bb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            Bb::create([
                'user_id' => random_int(1,10),
                'category_id' => random_int(1,20),
                'title' => ucfirst(fake()->domainWord),
                'content' => fake()->text(50),
                'price' => random_int(1,100)
            ]);
        }
    }
}
