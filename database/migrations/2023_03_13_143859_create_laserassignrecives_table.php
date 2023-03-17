<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaserassignrecivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laserassignrecives', function (Blueprint $table) {
            $table->id();
                 $table->string('process');
              $table->string('employee');
               $table->string('machine');
                $table->string('name');
                 $table->string('height');
                  $table->string('length');
                   $table->string('width');
                   $table->string('pcs');
                   $table->string('weight');
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
        Schema::dropIfExists('laserassignrecives');
    }
}