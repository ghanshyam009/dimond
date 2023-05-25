<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEndImages2ToChocolateConfirmationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chocolate_confirmation', function (Blueprint $table) {
            $table->string('end_images_2')->nullable()->after('end_images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chocolate_confirmation', function (Blueprint $table) {
            $table->dropColumn('end_images_2');
        });
    }
}