<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->truncate();
        $locations = [
            [
                'id'         => 1,
                'name'      => 'Chocolate',
            ],
            [
                'id'         => 2,
                'name'      => 'Laser',
            ],
            [
                'id'         => 3,
                'name'      => 'Stock Loss',
            ],
            [
                'id'         => 4,
                'name'      => 'Boiling',
            ],
            [
                'id'         => 5,
                'name'      => 'Polish',
            ],
            [
                'id'         => 6,
                'name'      => 'Stock Final',
            ],
        ];
        Location::insert($locations);
    }
}
