<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLotnoFieldToChocolatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chocolates', function (Blueprint $table) {
            $table->string('lotno')->nullable()->after('id');
            $table->string('img1')->nullable()->after('starttime');
            $table->string('img2')->nullable()->after('img1');
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
            $table->dropColumn('lotno');
            $table->dropColumn('img1');
            $table->dropColumn('img2');
        });
    }
}
