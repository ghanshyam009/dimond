<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableLaser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lasers', function (Blueprint $table) {
           $table->integer('machine_id')->nullable()->after('batch_id');
           $table->integer('user_id')->nullable()->after('machine_id');
           $table->string('dlc_weight')->nullable()->after('weight');
           $table->string('dm_weight')->nullable()->after('dlc_weight');
           $table->string('final_weight')->nullable()->after('dm_weight');
           $table->string('start_image')->nullable()->after('final_weight');
           $table->string('end_image')->nullable()->after('start_image');
           $table->string('note')->nullable()->after('stop_timer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lasers', function (Blueprint $table) {
            //
        });
    }
}
