<?php

use Database\Seeders\LocationSeeder;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(LocationSeeder::class);
         $this->call(LanguageSeeder::class);
        // $this->call(AdminUserSeeder::class);
    }
}