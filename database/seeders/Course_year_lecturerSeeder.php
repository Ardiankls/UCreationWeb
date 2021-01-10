<?php

namespace Database\Seeders;

use App\Models\course_year_lecturer;
use Illuminate\Database\Seeder;

class Course_year_lecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $course_year_lecturer = new course_year_lecturer();
        $course_year_lecturer->ucr_course_year_id = '1';
        $course_year_lecturer->ucr_user_id = '3';
        $course_year_lecturer->save();

        $course_year_lecturer = new course_year_lecturer();
        $course_year_lecturer->ucr_course_year_id = '2';
        $course_year_lecturer->ucr_user_id = '2';
        $course_year_lecturer->save();

        $course_year_lecturer = new course_year_lecturer();
        $course_year_lecturer->ucr_course_year_id = '3';
        $course_year_lecturer->ucr_user_id = '4';
        $course_year_lecturer->save();

        $course_year_lecturer = new course_year_lecturer();
        $course_year_lecturer->ucr_course_year_id = '4';
        $course_year_lecturer->ucr_user_id = '5';
        $course_year_lecturer->save();

        $course_year_lecturer = new course_year_lecturer();
        $course_year_lecturer->ucr_course_year_id = '5';
        $course_year_lecturer->ucr_user_id = '2';
        $course_year_lecturer->save();
    }
}
