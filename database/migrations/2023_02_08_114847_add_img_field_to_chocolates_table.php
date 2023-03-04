<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImgFieldToChocolatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chocolates', function (Blueprint $table) {
         
            $table->string('img3')->nullable()->after('img2');
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
           
            $table->dropColumn('img3');
        });
    }
}
