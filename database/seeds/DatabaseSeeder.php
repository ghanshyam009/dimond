<?php

use Database\Seeders\LocationSeeder;
use Database\Seeders\ProcessReasonSeeder;
use Database\Seeders\LanguageSeeder;
use Database\Seeders\ProcessSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(ProcessReasonSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(ProcessSeeder::class);
    }
}