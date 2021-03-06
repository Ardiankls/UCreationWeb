<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseYearLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ucr_course_year_lecturers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ucr_course_year_id')->constrained()->onDelete('cascade');;
            $table->foreignId('ucr_user_id')->constrained()->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ucr_course_year_lecturers');
    }
}
