<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusFieldToLotMovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lot_moves', function (Blueprint $table) {
            $table->enum('status', array('0','1'))->default('0')->after('print_packet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lot_moves', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
