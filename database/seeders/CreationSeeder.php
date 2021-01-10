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
        $creation->picture = '';
        $creation->created_by='6';
        $creation->creator_team='7';
        $creation->status = '0';
        $creation->ucr_course_year_lecturer_id = '1';
        $creation->save();

        $creation = new Creation();
        $creation->name = 'Nice Web';
        $creation->date = '2021-01-15';
        $creation->course = '1';
        $creation->short_description ='just short';
        $creation->long_description = 'very long';
        $creation->picture = '';
        $creation->created_by='7';
        $creation->creator_team='6';
        $creation->status = '1';
        $creation->ucr_course_year_lecturer_id = '1';
        $creation->save();

        $creation = new Creation();
        $creation->name = 'Programming tec';
        $creation->date = '2020-01-15';
        $creation->course = '1';
        $creation->short_description ='just short';
        $creation->long_description = 'very long';
        $creation->picture = '';
        $creation->created_by='6';
        $creation->creator_team='7';
        $creation->status = '0';
        $creation->ucr_course_year_lecturer_id = '1';
        $creation->save();

        $creation = new Creation();
        $creation->name = 'Programming tec';
        $creation->date = '2020-01-15';
        $creation->course = '2';
        $creation->short_description ='just short';
        $creation->long_description = 'very long';
        $creation->picture = '';
        $creation->created_by='7';
        $creation->creator_team='6';
        $creation->status = '0';
        $creation->ucr_course_year_lecturer_id = '2';
        $creation->save();

        $creation = new Creation();
        $creation->name = 'Web dev tec';
        $creation->date = '2020-04-15';
        $creation->course = '3';
        $creation->short_description ='just short';
        $creation->long_description = 'very long';
        $creation->picture = '';
        $creation->created_by='6';
        $creation->creator_team='7';
        $creation->status = '0';
        $creation->ucr_course_year_lecturer_id = '3';
        $creation->save();

        $creation = new Creation();
        $creation->name = 'The Mobile App';
        $creation->date = '2020-10-25';
        $creation->course = '4';
        $creation->short_description ='just short';
        $creation->long_description = 'very long';
        $creation->picture = '';
        $creation->created_by='7';
        $creation->creator_team='6';
        $creation->status = '1';
        $creation->ucr_course_year_lecturer_id = '4';
        $creation->save();
    }
}
