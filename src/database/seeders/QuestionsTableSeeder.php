<?php

namespace Database\Seeders;

use App\Models\questions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        questions::create([
            'image' => '/image/sample.jpg',
            'text' => "日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？",
            'supplement' => "設問補足",
            'quiz_id' => '2'
        ]);
    }
}
