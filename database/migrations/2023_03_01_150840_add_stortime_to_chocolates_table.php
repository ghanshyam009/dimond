<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStortimeToChocolatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chocolates', function (Blueprint $table) {
    $table->string('stortime')->nullable()->after('img3');
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
          $table->dropColumn('stortime');
        });
    }
}