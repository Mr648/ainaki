<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAinakiUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ainaki_users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('family');
            $table->string('role');
            $table->string('username');
            $table->string('password');
            $table->string('phone',11);
            $table->string('email',50);

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
        Schema::dropIfExists('ainaki_users');
    }
}
