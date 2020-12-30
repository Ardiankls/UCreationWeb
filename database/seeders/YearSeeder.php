<?php

namespace Database\Seeders;

use App\Models\year;
use Illuminate\Database\Seeder;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $year = new year();
        $year->year = '2019-2020 Odd';
        $year->save();

        $year = new year();
        $year->year = '2020-2021 Even';
        $year->save();

        ;
    }
}
