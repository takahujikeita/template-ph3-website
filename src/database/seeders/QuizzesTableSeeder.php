<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Quiz::create([
            'name' => 'ITクイズ',
        ]);
        Quiz::create([
            'name' => '他己紹介クイズ',
        ]);

        for($i=0; $i<100; $i++){
            Quiz::create([
                'name'=>$faker->sentence,
            ]);
        }
    }
}
