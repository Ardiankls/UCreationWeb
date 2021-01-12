<?php

namespace Database\Seeders;

use App\Models\Student;
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
        //
        $student = new Student();
        $student->nim = '0706011910020';
        $student->name ='fadhel';
        $student->email = 'fadhel@student.com';
        $student->batch ='2019';
        $student->description='';
        $student->photo='';
        $student->gender='M';
        $student->phone='0815848234';
        $student->line_account='fdhel';
        $student->department_id='33';
        $student->save();

        $student = new Student();
        $student->nim = '0706011910021';
        $student->name ='budi';
        $student->email = 'budi@student.com';
        $student->batch ='2018';
        $student->description='';
        $student->photo='';
        $student->gender='M';
        $student->phone='081584832132';
        $student->line_account='bdi';
        $student->department_id='33';
        $student->save();
    }
}
