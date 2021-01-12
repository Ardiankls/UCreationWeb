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
        $staff->nip = '0001';
        $staff->name = 'ardian';
        $staff->email = 'ardian@admin.com';
        $staff->description= '';
        $staff->photo ='' ;
        $staff->gender = 'M';
        $staff->phone = '0312456';
        $staff->line_account = 'akls07';
        $staff->department_id = '2';
        $staff->title_id = '1';
        $staff->save();

        $staff =new Staff();
        $staff->nip = '0002';
        $staff->name = 'fadhel';
        $staff->email = 'fadhel@staff.com';
        $staff->description= '';
        $staff->photo ='' ;
        $staff->gender = 'M';
        $staff->phone = '0312456';
        $staff->line_account = 'fdhel';
        $staff->department_id = '2';
        $staff->title_id = '1';
        $staff->save();
    }

}
