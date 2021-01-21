<?php

namespace Database\Seeders;

use App\Models\Creation_user;
use Illuminate\Database\Seeder;

class CreationUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $creation_user= new Creation_user();
        $creation_user->ucr_creation_id = '1';
        $creation_user->ucr_user_id = '9';
        $creation_user->save();

        $creation_user= new Creation_user();
        $creation_user->ucr_creation_id = '2';
        $creation_user->ucr_user_id = '10';
        $creation_user->save();

        $creation_user= new Creation_user();
        $creation_user->ucr_creation_id = '3';
        $creation_user->ucr_user_id = '9';
        $creation_user->save();

        $creation_user= new Creation_user();
        $creation_user->ucr_creation_id = '4';
        $creation_user->ucr_user_id = '9';
        $creation_user->save();

        $creation_user= new Creation_user();
        $creation_user->ucr_creation_id = '5';
        $creation_user->ucr_user_id = '10';
        $creation_user->save();

        $creation_user= new Creation_user();
        $creation_user->ucr_creation_id = '5';
        $creation_user->ucr_user_id = '9';
        $creation_user->save();

        $creation_user= new Creation_user();
        $creation_user->ucr_creation_id = '6';
        $creation_user->ucr_user_id = '9';
        $creation_user->save();

        $creation_user= new Creation_user();
        $creation_user->ucr_creation_id = '6';
        $creation_user->ucr_user_id = '10';
        $creation_user->save();

    }
}
