<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        $admin           = new Admin();
        $admin->name     = "Super Admin";
        $admin->email    = "superadmin@example.com";
        $admin->username = "superadmin";
        $admin->password = Hash::make('12345678');
        $admin->save();
    }
}
