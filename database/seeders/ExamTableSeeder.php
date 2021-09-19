<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach (range(1,10) as $item)
        {
            DB::table('exams')->insert([
               'title' => "Exam-$item",
               'type' => "TEST",
               'qcount' => rand(10,30),
               'answers' => "1223421243214",
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
