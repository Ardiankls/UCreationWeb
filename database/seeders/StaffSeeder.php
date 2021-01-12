<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $staff =new Staff();
        $staff->nip = '0002';
        $staff->nidn = '0002';
        $staff->name = 'fadhel';
        $staff->email = 'fadhel@lecturer.com';
        $staff->description= '';
        $staff->photo ='' ;
        $staff->gender = 'M';
        $staff->phone = '0312456';
        $staff->line_account = 'fjanuar';
        $staff->department_id = '8';
        $staff->title_id = '2';
        $staff->jaka_id = '1';
        $staff->save();
    }
}
