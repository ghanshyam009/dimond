<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('info');
            $table->string('company');
            $table->string('code');
            $table->string('position');
            $table->string('street');
            $table->string('street2');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('zip');
            $table->string('phone');
            $table->string('mobile')->nullable();
            $table->string('email');
            $table->string('website');
            $table->string('gst');
            $table->string('title');
            $table->string('gstin');
            $table->string('language');
            $table->string('tag');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('parties');
    }
}
