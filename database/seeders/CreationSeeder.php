<?php

namespace Database\Seeders;

use App\Models\Creation;
use Illuminate\Database\Seeder;

class CreationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $creation = new Creation();
        $creation->name = 'Amazing Web';
        $creation->date = '2021-01-10';
        $creation->course = '1';
        $creation->short_description ='just short';
        $creation->long_description = 'very long';
        $creation->picture = 'asd';
        $creation->status = '0';
        $creation->ucr_course_year_id = '1';
//        $creation->ucr_user_id = '9';
        $creation->save();

        $creation = new Creation();
        $creation->name = 'Nice Web';
        $creation->date = '2021-01-15';
        $creation->course = '1';
        $creation->short_description ='just short';
        $creation->long_description = 'very long';
        $creation->picture = 'asd';
        $creation->status = '1';
        $creation->ucr_course_year_id = '1';
//        $creation->ucr_user_id = '10';
        $creation->save();

        $creation = new Creation();
        $creation->name = 'Programming tec';
        $creation->date = '2020-01-15';
        $creation->course = '1';
        $creation->short_description ='just short';
        $creation->long_description = 'very long';
        $creation->picture = 'dsa';
        $creation->status = '0';
        $creation->ucr_course_year_id = '1';
//        $creation->ucr_user_id = '9';
        $creation->save();

        $creation = new Creation();
        $creation->name = 'Programming tec';
        $creation->date = '2020-01-15';
        $creation->course = '2';
        $creation->short_description ='just short';
        $creation->long_description = 'very long';
        $creation->picture = 'sad';
        $creation->status = '0';
        $creation->ucr_course_year_id = '2';
//        $creation->ucr_user_id = '10';
        $creation->save();

        $creation = new Creation();
        $creation->name = 'Web dev tec';
        $creation->date = '2020-04-15';
        $creation->course = '3';
        $creation->short_description ='just short';
        $creation->long_description = 'very long';
        $creation->picture = 'sdsa';
        $creation->status = '0';
        $creation->ucr_course_year_id = '3';
//        $creation->ucr_user_id = '9';
        $creation->save();

        $creation = new Creation();
        $creation->name = 'The Mobile App';
        $creation->date = '2020-10-25';
        $creation->course = '4';
        $creation->short_description ='just short';
        $creation->long_description = 'very long';
        $creation->picture = 'ds';
        $creation->status = '1';
        $creation->ucr_course_year_id = '5';
//        $creation->ucr_user_id = '10';
        $creation->save();
    }
}
