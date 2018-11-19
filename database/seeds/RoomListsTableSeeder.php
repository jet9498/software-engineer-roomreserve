<?php

use Illuminate\Database\Seeder;

class RoomListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roomlists')->insert([
            'roomName' => '150310',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'remember_token' => '150310.jpg',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150304',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'remember_token' => '150304.jpg',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150311',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'remember_token' => '150311.jpg',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150404',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'remember_token' => '150404.jpg',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150405',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'remember_token' => '150405.jpg',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150208',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'remember_token' => '150208.jpg',
        ]);
    }
}
