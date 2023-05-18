<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGrowHeightColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lot_details', function (Blueprint $table) {
            if (!Schema::hasColumn('lot_details', 'grow_height')) {
                $table->string('grow_height')->nullable()->after('weight');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lot_details', function (Blueprint $table) {
            if (Schema::hasColumn('lot_details', 'grow_height')) {
                $table->dropColumn('grow_height');
            }
        });
    }
}
