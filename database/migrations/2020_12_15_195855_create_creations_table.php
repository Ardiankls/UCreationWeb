<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ucr_creations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->string('course');
            $table->text('short_description');
            $table->text('long_description');
            $table->text('picture')->nullable();
            $table->string('created_by')->nullable();
            $table->string('creator_team')->nullable();
            $table->enum('status',['0', '1', '3'])
                ->default('0')
                ->comment('0 = pending, 1 = approved, 2 = rejected');

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
        Schema::dropIfExists('ucr_creations');
    }
}
