<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToUcrCreations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ucr_creations', function (Blueprint $table) {
            //
            $table->foreignId('ucr_course_year_id')->constrained()->onDelete('cascade');
//            $table->foreignId('ucr_user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ucr_creations', function (Blueprint $table) {
            //
        });
    }
}
