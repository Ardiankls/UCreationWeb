<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ucr_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
//            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('is_login', ['0', '1'])
                ->default( '0')->comment('0 = notLogin, 1 = Login');
            $table->integer('detailable_id')->unsigned();
            $table->string('detailable_type');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }

}
