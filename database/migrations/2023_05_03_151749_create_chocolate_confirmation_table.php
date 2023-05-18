<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChocolateConfirmationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chocolate_confirmation', function (Blueprint $table) {
            $table->id();
            $table->integer('lot_id')->nullable();
            $table->integer('finish_type_id')->nullable();
            $table->string('final_weight')->nullable();
            $table->string('chocoloate_start_image')->nullable();
            $table->string('growing_done_image')->nullable();
            $table->string('end_images')->nullable();
            $table->string('growing_time')->nullable();
            $table->string('note',1000)->nullable();
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
        Schema::dropIfExists('chocolate_confirmation');
    }
}
