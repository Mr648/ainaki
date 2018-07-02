<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id')->unsigned()->nullable();
            $table->integer('warranty_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();


            $table->string('name')->nullable();
            $table->text('description')->nullable();

            $table->float('BC')->nullable();
            $table->float('DIA')->nullable();
            $table->string('healthLicence')->nullable();
            $table->string('color')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('quantityInPack')->nullable();
            $table->string('usePeriod')->nullable();
            $table->float('waterContent')->nullable();

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
        Schema::dropIfExists('lens');
    }
}
