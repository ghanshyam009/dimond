<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImg2ToImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->string('img2')->nullable()->after('image');
            $table->string('img3')->nullable()->after('img2');
            $table->string('img4')->nullable()->after('img3');
            $table->string('img5')->nullable()->after('img4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn('img2');
            $table->dropColumn('img3');
            $table->dropColumn('img4');
            $table->dropColumn('img5');
        });
    }
}
