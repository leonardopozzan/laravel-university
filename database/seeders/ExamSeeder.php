<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exams = config('exams');
        foreach($exams as $exam){
            $new_exam = new Exam();
            $new_exam->course_id = $exam['course_id'];
            $new_exam->date = $exam['date'];
            $new_exam->hour = $exam['hour'];
            $new_exam->location = $exam['location'];
            $new_exam->address = $exam['address'];
            $new_exam->save();
        }
    }
}
