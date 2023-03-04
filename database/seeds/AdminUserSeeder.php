<?php
  
use Illuminate\Database\Seeder;
// use App\Models\User;
use App\Models\userlogin;
   
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        userlogin::create([
            'name' => 'aaa',
            'email' => 'example@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
