<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\processreson;
use Illuminate\Support\Facades\DB;

class ProcessReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('processresons')->truncate();
        $processreson = [
            [
                'id'         => 1,
                'name'      => 'OVER TEMPERATURE',
                'status'      => 1,
            ],
            [
                'id'         => 2,
                'name'      => 'LOW PRESSURE',
                'status'      => 1,

            ],
            [
                'id'         => 3,
                'name'      => 'PERFECT GROWING',
                'status'      => 1,
            ],
            [
                'id'         => 4,  
                'name'      => 'DUE TO WATER ISSUE',
                'status'      => 1,
            ],
            [
                'id'         => 5,
                'name'      => 'DUE TO HUMINITY',
                'status'      => 1,
            ],
            [
                'id'         => 6,
                'name'      => 'OTHERS',
                'status'      => 1,
            ],
            [
                'id'         => 7,
                'name'      => 'SEED OVER LAPPING',
                'status'      => 1,
            ],
            [
                'id'         => 8,
                'name'      => 'DUE TO GAS ISSUE',
                'status'      => 1,
            ],
            [
                'id'         => 9,
                'name'      => 'DLC GROWING',
                'status'      => 1,
            ],
        ];

        processreson::insert($processreson);
    }
}
