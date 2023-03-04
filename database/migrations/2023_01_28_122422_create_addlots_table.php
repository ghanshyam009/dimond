<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addlots', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('batch_id')->nullable();
            $table->string('pcs')->nullable();
            $table->string('shape')->nullable();
            $table->string('height')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('weight')->nullable();
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
        Schema::dropIfExists('addlots');
    }
}
