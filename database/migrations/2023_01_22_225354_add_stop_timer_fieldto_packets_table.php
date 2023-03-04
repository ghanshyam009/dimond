<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStopTimerFieldtoPacketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('packets', function (Blueprint $table) {
            $table->dateTime('stop_timer', $precision = 0)->nullable()->after('timer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('packets', function (Blueprint $table) {
            $table->dropColumn('stop_timer');
        });
    }
}
