<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimerFieldToLotMovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lot_moves', function (Blueprint $table) {
            $table->dateTime('start_timer', $precision = 0)->nullable()->after('status');
            $table->dateTime('stop_timer', $precision = 0)->nullable()->after('start_timer');
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
            $table->dropColumn('start_timer');
            $table->dropColumn('stop_timer');
        });
    }
}
