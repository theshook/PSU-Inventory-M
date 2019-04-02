<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_no');
            $table->integer('user_id')->unique();
            $table->string('user_fname');
            $table->string('user_lname');
            $table->string('user_mname');
            $table->string('password')->nullable();
            $table->char('user_inactive')->default('0');
            $table->char('user_delete')->default('0');
            $table->char('user_encode')->default('0');
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
