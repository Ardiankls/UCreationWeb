<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =new User();
        $user->name = 'ardian';
        $user->email = 'ardian@admin.com';
        $user->password = Hash::make('passwordadmin1');
        $user->role_id = 4;
        $user->detailable_id= 1;
        $user->detailable_type= 'App\Models\Staff';
        $user->save();

        $user =new User();
        $user->name = 'kevin';
        $user->email = 'kevin@admin.com';
        $user->password = Hash::make('passwordadmin2');
        $user->role_id = 4;
        $user->detailable_id= 2;
        $user->detailable_type= 'App\Models\Staff';
        $user->save();

        $user =new User();
        $user->name = 'fadhel';
        $user->email = 'fadhel@admin.com';
        $user->password = Hash::make('passwordadmin3');
        $user->role_id = 4;
        $user->detailable_id= 3;
        $user->detailable_type= 'App\Models\Staff';
        $user->save();

        $user =new User();
        $user->name = 'fadhel';
        $user->email = 'fadhel@staff.com';
        $user->password = Hash::make('passwordstaff1');
        $user->role_id = 3;
        $user->detailable_id= 4;
        $user->detailable_type= 'App\Models\Staff';
        $user->save();

        $user =new User();
        $user->name = 'ardian';
        $user->email = 'ardian@lecturer.com';
        $user->password = Hash::make('passworlecturer2');
        $user->role_id = 2;
        $user->detailable_id= 1;
        $user->detailable_type= 'App\Models\Lecturer';
        $user->save();



        $user =new User();
        $user->name = 'kevin';
        $user->email = 'kevin@lecturer.com';
        $user->password = Hash::make('passwordlecturer1');
        $user->role_id = 2;
        $user->detailable_id= 2;
        $user->detailable_type= 'App\Models\Lecturer';
        $user->save();

        $user =new User();
        $user->name = 'fadhel';
        $user->email = 'fadhel@lecturer.com';
        $user->password = Hash::make('passwordlecturer2');
        $user->role_id = 2;
        $user->detailable_id= 3;
        $user->detailable_type= 'App\Models\Lecturer';
        $user->save();

        $user =new User();
        $user->name = 'budi';
        $user->email = 'budi@lecturer.com';
        $user->password = Hash::make('passwordlecturer3');
        $user->role_id = 2;
        $user->detailable_id= 4;
        $user->detailable_type= 'App\Models\Lecturer';
        $user->save();





        $user =new User();
        $user->name = 'fadhel';
        $user->email = 'fadhel@student.com';
        $user->password = Hash::make('passwordstudent1');
        $user->role_id = 1;
        $user->detailable_id= 1;
        $user->detailable_type= 'App\Models\Student';
        $user->save();

        $user =new User();
        $user->name = 'budi';
        $user->email = 'budi@student.com';
        $user->password = Hash::make('passwordstudent2');
        $user->role_id = 1;
        $user->detailable_id= 1;
        $user->detailable_type= 'App\Models\Student';
        $user->save();
        //
    }
}
