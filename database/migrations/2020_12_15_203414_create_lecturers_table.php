<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->unique();
            $table->string('nidn')->unique();
            $table->string('name');
            $table->string('email');
            $table->text('description');
            $table->text('photo');
            $table->string('gender',1);
            $table->string('phone');
            $table->string('line_account');
            $table->foreignId('department_id')->nullable()->constrained();
            $table->foreignId('title_id')->nullable()->constrained();
            $table->foreignId('jaka_id')->nullable()->constrained();
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
        Schema::dropIfExists('ucr_lecturers');
    }
}
