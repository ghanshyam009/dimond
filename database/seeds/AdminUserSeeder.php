<?php
  
use Illuminate\Database\Seeder;
// use App\Models\User;
use App\Models\userlogin;
use Illuminate\Support\Facades\DB;
   
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        userlogin::create([
            'name' => 'aaa',
            'email' => 'example@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
