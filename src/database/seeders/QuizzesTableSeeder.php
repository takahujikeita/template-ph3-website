<?php

namespace Database\Seeders;

use App\Models\quizzes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        quizzes::create([
            'name' => '船本雄月の性別は？',
            'id' => '5',
        ]);
    }
}
