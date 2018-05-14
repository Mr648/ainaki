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

            $table->string('name')->nullable();
            $table->string('family')->nullable();
            $table->string('role')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('phone',11)->nullable();
            $table->string('email',50)->nullable();

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
