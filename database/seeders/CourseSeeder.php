<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = config('courses');
        foreach($courses as $course){
            $new_course = new Course();
            $new_course->name = $course['name'];
            $new_course->degree_id = $course['degree_id'];
            $new_course->level = $course['level'];
            $new_course->address = $course['address'];
            $new_course->email = $course['email'];
            $new_course->website = $course['website'];
            $new_course->save();
        }
    }
}
