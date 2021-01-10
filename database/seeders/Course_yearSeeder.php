<?php

namespace Database\Seeders;

use App\Models\Course_year;
use Illuminate\Database\Seeder;

class Course_yearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $course_year = new Course_year();
        $course_year->ucr_year_id = '1';
        $course_year->ucr_course_id = '1';
        $course_year->save();

        $course_year = new Course_year();
        $course_year->ucr_year_id = '1';
        $course_year->ucr_course_id = '2';
        $course_year->save();

        $course_year = new Course_year();
        $course_year->ucr_year_id = '2';
        $course_year->ucr_course_id = '3';
        $course_year->save();

        $course_year = new Course_year();
        $course_year->ucr_year_id = '2';
        $course_year->ucr_course_id = '4';
        $course_year->save();

        $course_year = new Course_year();
        $course_year->ucr_year_id = '1';
        $course_year->ucr_course_id = '5';
        $course_year->save();
    }
}
