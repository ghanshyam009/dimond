<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaserCutDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laser_cut_details', function (Blueprint $table) {
            $table->id();
            $table->integer('laser_id')->nullable();
            $table->integer('lot_id')->nullable();
            $table->integer('lot_type')->nullable();
            $table->integer('process_type')->nullable();
            $table->string('name')->nullable();
            $table->string('height')->nullable();
            $table->string('length')->nullable();
            $table->string('weight')->nullable();
            $table->string('width')->nullable();
            $table->string('process')->nullable();
            $table->integer('dlc_weights')->nullable();
            $table->integer('loss_weights')->nullable();
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
        Schema::dropIfExists('laser_cut_details');
    }
}
