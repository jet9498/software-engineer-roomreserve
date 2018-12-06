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
            'status' => '1',
            'imgUrl' => 'https://sv1.picz.in.th/images/2018/12/02/3p8WOP.jpg',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150304',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'status' => '1',
            'imgUrl' => 'https://sv1.picz.in.th/images/2018/12/02/3prFeZ.jpg',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150311',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'status' => '1',
            'imgUrl' => 'https://sv1.picz.in.th/images/2018/12/02/3p8dat.jpg',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150404',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'status' => '1',
            'imgUrl' => 'https://sv1.picz.in.th/images/2018/12/02/3p87ze.jpg',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150405',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'status' => '1',
            'imgUrl' => 'https://sv1.picz.in.th/images/2018/12/02/3p8Sxl.jpg',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150208',
            'roomDescription' => 'ห้องเรียนขนาดกลาง',
            'status' => '1',
            'imgUrl' => 'https://sv1.picz.in.th/images/2018/12/02/3prMkI.jpg',
        ]);
    }
}
