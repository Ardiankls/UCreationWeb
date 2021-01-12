<?php

namespace Database\Seeders;

use App\Models\Course_year;
use App\Models\course_year_lecturer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Model::unguard();

        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            JakaSeeder::class,
            DepartmentSeeder::class,
            TitleSeeder::class,
            YearSeeder::class,
            LecturerSeeder::class,
            StaffSeeder::class,
            StudentSeeder::class,
            CourseSeeder::class,
            Course_yearSeeder::class,
            Course_year_lecturerSeeder::class,
            CreationSeeder::class,


        ]);

        Model::reguard();
    }
}
