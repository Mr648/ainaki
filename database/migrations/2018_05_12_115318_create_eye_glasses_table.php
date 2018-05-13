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
            $table->integer('warranty_id')->unsigned()->nullable();

            $table->string('name')->nullable();
            $table->text('description')->nullable();

//            $table->string('faceShapes')->nullable();
//            $table->string('faceSizes')->nullable();
            $table->string('bridgeLength')->nullable();
            $table->string('frameColor')->nullable();
            $table->string('frameColorType')->nullable();
            $table->string('frameShape')->nullable();
            $table->string('frameWidth')->nullable();
            $table->string('gender_id')->nullable();
            $table->string('handleLength')->nullable();
            $table->string('hasBox')->nullable();
            $table->string('lensColor')->nullable();
            $table->string('lensColorType')->nullable();
            $table->string('lensHeight')->nullable();
            $table->string('lensWidth')->nullable();
            $table->string('lensMaterial')->nullable();
            $table->string('weight')->nullable();

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
