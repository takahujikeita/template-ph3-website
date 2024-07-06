<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Choice::create([
            'question_id'=>4,
            'text'=>'Internet of Things',
            'is_correct'=>1,
        ]);
        Choice::create([
            'question_id'=>4,
            'text'=>'Information on Tool',
            'is_correct'=>0,
        ]);
        Choice::create([
            'question_id'=>4,
            'text'=>'Integrate into Technology',
            'is_correct'=>0,
        ]);
        
        
    }
}
