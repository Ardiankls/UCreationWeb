<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Seeder;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $lecturer =new Lecturer();
        $lecturer->nip = '10201';
        $lecturer->nidn = '0002';
        $lecturer->name = 'ardian';
        $lecturer->email = 'ardian@lecturer.com';
        $lecturer->description= '';
        $lecturer->photo ='' ;
        $lecturer->gender = 'M';
        $lecturer->phone = '0123456';
        $lecturer->line_account = 'ardlec';
        $lecturer->department_id = '8';
        $lecturer->title_id = '3';
        $lecturer->jaka_id = '1';
        $lecturer->save();

        $lecturer =new Lecturer();
        $lecturer->nip = '1001';
        $lecturer->nidn = '0601';
        $lecturer->name = 'kevin';
        $lecturer->email = 'kevin@lecturer.com';
        $lecturer->description= '';
        $lecturer->photo ='' ;
        $lecturer->gender = 'M';
        $lecturer->phone = '0123456';
        $lecturer->line_account = 'jokevid';
        $lecturer->department_id = '8';
        $lecturer->title_id = '2';
        $lecturer->jaka_id = '1';
        $lecturer->save();

        $lecturer =new Lecturer();
        $lecturer->nip = '421';
        $lecturer->nidn = '00312302';
        $lecturer->name = 'fadhel';
        $lecturer->email = 'fadhel@lecturer.com';
        $lecturer->description= '';
        $lecturer->photo ='' ;
        $lecturer->gender = 'M';
        $lecturer->phone = '0312456';
        $lecturer->line_account = 'fjanuar';
        $lecturer->department_id = '8';
        $lecturer->title_id = '2';
        $lecturer->jaka_id = '1';
        $lecturer->save();

        $lecturer =new Lecturer();
        $lecturer->nip = '4213';
        $lecturer->nidn = '53414';
        $lecturer->name = 'budi';
        $lecturer->email = 'budi@lecturer.com';
        $lecturer->description= '';
        $lecturer->photo ='' ;
        $lecturer->gender = 'M';
        $lecturer->phone = '0312456';
        $lecturer->line_account = 'fjanuar';
        $lecturer->department_id = '8';
        $lecturer->title_id = '2';
        $lecturer->jaka_id = '1';
        $lecturer->save();
    }


}
