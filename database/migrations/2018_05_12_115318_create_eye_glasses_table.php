<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEyeGlassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eye_glasses', function (Blueprint $table) {
            $table->increments('id');

            /**
             * this table should have all fields which are extended from \App\Product
             * and in the Accessory class we should define different table for it.
             */
            $table->integer('brand_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();

            $table->string('name')->nullable();
            $table->text('description')->nullable();

            $table->float('bridgeLength')->nullable();
            $table->string('frameColor')->nullable();
            $table->string('frameColorType')->nullable();
            $table->string('frameShape')->nullable();
            $table->float('frameWidth')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->float('handleLength')->nullable();
            $table->string('hasBox')->nullable();
            $table->string('lensColor')->nullable();
            $table->string('lensColorType')->nullable();
            $table->float('lensHeight')->nullable();
            $table->float('lensWidth')->nullable();
            $table->string('lensMaterial')->nullable();
            $table->float('weight')->nullable();

            $table->float('discountPercentage')->nullable();
            $table->timestamp('discountPeriod')->nullable();
            $table->timestamp('productionDate')->nullable();

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
        Schema::dropIfExists('eye_glasses');
    }
}
