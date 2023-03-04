<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLasersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lasers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lot_id');
            $table->unsignedBigInteger('batch_id');
            $table->string('pcs')->nullable();
            $table->string('shape')->nullable();
            $table->string('height')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('weight')->nullable();
            $table->dateTime('timer', $precision = 0)->nullable();
            $table->dateTime('stop_timer', $precision = 0)->nullable();
            $table->timestamps();

            $table->foreign('lot_id')->references('id')->on('lot_masters');
            $table->foreign('batch_id')->references('id')->on('bactches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lasers');
    }
}
