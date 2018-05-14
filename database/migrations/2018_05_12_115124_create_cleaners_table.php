<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCleanersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cleaners', function (Blueprint $table) {
            $table->increments('id');
            /**
             * this table should have all fields which are extended from \App\Product
             * and in the Accessory class we should define different table for it.
             */
            $table->integer('brand_id')->nullable();
            $table->integer('warranty_id')->nullable();
            $table->integer('category_id')->nullable();

            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->float('volume')->nullable();
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
        Schema::dropIfExists('cleaners');
    }
}
