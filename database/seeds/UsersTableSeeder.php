<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=App\User::create([
            'name'=>'Thant Zaw',
            'email'=>'thant@gmail.com',
            'password'=>bcrypt('liverpool'),
            
        ]);
    }
}
