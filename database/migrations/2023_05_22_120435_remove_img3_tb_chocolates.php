<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveImg3TbChocolates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chocolates', function (Blueprint $table) {
            if (Schema::hasColumn('chocolates', 'img3')) {
                $table->dropColumn('img3');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chocolates', function (Blueprint $table) {
            //
        });
    }
}
