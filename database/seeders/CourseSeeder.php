<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $course = new Course();
        $course->name = 'Web Programming';
        $course->save();

        $course = new Course();
        $course->name = 'Programming Technique';
        $course->save();

        $course = new Course();
        $course->name = 'Web Development';
        $course->save();

        $course = new Course();
        $course->name = 'Mobile App Development';
        $course->save();

        $course = new Course();
        $course->name = 'Algorithm Programming';
        $course->save();
    }

}
