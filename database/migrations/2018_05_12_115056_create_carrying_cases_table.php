<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarryingCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrying_cases', function (Blueprint $table) {
            $table->increments('id');
            /**
             * this table should have all fields which are extended from \App\Product
             * and in the Accessory class we should define different table for it.
             */
            $table->integer('brand_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('name')->nullable();
            $table->string('color')->nullable();
            $table->string('material')->nullable();
            $table->float('width')->nullable();
            $table->float('height')->nullable();
            $table->text('description')->nullable();
            $table->float('discountPercentage')->nullable();
            $table->timestamp('discountPeriod')->nullable();
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
        Schema::dropIfExists('carrying_cases');
    }
}
