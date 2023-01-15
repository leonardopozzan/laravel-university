<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = config('students');
        foreach($students as $student){
            $new_student = new Student();
            $new_student->name = $student['name'];
            $new_student->surname = $student['surname'];
            $new_student->date_of_birth = $student['date_of_birth'];
            $new_student->fiscal_code = $student['fiscal_code'];
            $new_student->enrolment_date = $student['enrolment_date'];
            $new_student->registration_number = intval($student['registration_number']);
            $new_student->email = $student['email'];
            $new_student->save();
        }
    }
}
