<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPriceToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carrying_cases', function (Blueprint $table) {
            $table->double('price')->after('description')->default(0)->nullable();
        });

        Schema::table('straps', function (Blueprint $table) {
            $table->double('price')->after('description')->default(0)->nullable();
        });

        Schema::table('lens', function (Blueprint $table) {
            $table->double('price')->after('description')->default(0)->nullable();
        });

        Schema::table('cleaners', function (Blueprint $table) {
            $table->double('price')->after('description')->default(0)->nullable();
        });

        Schema::table('eye_glasses', function (Blueprint $table) {
            $table->double('price')->after('description')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('carrying_cases', function (Blueprint $table) {
            $table->dropColumn('price');
        });

        Schema::table('straps', function (Blueprint $table) {
            $table->dropColumn('price');
        });

        Schema::table('lens', function (Blueprint $table) {
            $table->dropColumn('price');
        });

        Schema::table('cleaners', function (Blueprint $table) {
            $table->dropColumn('price');
        });

        Schema::table('eye_glasses', function (Blueprint $table) {
            $table->dropColumn('price');
        });
    }
}
