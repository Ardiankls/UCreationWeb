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
        $course->department_id ='33';
        $course->save();

        $course = new Course();
        $course->name = 'Programming Technique';
        $course->department_id ='33';
        $course->save();

        $course = new Course();
        $course->name = 'Web Development';
        $course->department_id ='33';
        $course->save();

        $course = new Course();
        $course->name = 'Mobile App Development';
        $course->department_id ='33';
        $course->save();

        $course = new Course();
        $course->name = 'Algorithm Programming';
        $course->department_id ='33';
        $course->save();
    }

}
