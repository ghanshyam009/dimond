<?php

namespace Database\Seeders;

use App\Models\Processes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('processes')->truncate();
        $process = [
            [
                'id'         => 1,
                'name'      => 'FIRST GROWING',
            ],
            [
                'id'         => 2,
                'name'      => 'SECOND GROWING',
            ],
            [
                'id'         => 3,
                'name'      => 'THIRD GROWING',
            ],
            [
                'id'         => 4,
                'name'      => 'FOUTH GROWING',
            ],
        ];
        Processes::insert($process);
    }
}
