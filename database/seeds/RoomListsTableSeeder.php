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
            'roomName' => '310',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'remember_token' => 'box1.jpg',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '15034',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'remember_token' => 'box1.jpg',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150311',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'remember_token' => 'box1.jpg',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150404',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'remember_token' => 'box1.jpg',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150405',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'remember_token' => 'box1.jpg',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150208',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'remember_token' => 'box1.jpg',
        ]);
    }
}
