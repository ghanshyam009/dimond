<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnlasersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returnlasers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lot_id');
            $table->unsignedBigInteger('batch_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('process')->nullable();
            $table->string('netprocess')->nullable();
            $table->string('dlcweight')->nullable();
             $table->string('name')->nullable();
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
        Schema::dropIfExists('returnlasers');
    }
}