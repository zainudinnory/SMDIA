<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name','50');
            $table->string('last_name','50');
            $table->date('date_of_birth')->nullable();
            $table->string('username','50');
            $table->string('password','50');
            $table->timestamp('date_of_join');
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->string('phone','20')->nullable();
            $table->unique('username','user_name_unique');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_table');
    }
}
