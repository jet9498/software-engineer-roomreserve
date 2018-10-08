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
            'roomDescription' => 'ห้องโปรเจคเตอร์เล็กในตึก 3',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '15034',
            'roomDescription' => 'ห้องโปรเจคเตอร์ใหญ่ในตึก 15',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150311',
            'roomDescription' => 'ห้องประชุมใหญ่ในตึก 15',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150404',
            'roomDescription' => 'ห้องประชุมเล็กในตึก 15',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150405',
            'roomDescription' => 'ห้องโปรเจคเตอร์เล็กในตึก 15',
        ]);
        DB::table('roomlists')->insert([
            'roomName' => '150208',
            'roomDescription' => 'ห้องเรียนเล็กตึก 15',
        ]);
    }
}
