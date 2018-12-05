<?php

use Illuminate\Database\Seeder;

class UserListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin',
            'password' => '1234567',
            
        ]);
        

        //
    }
}
