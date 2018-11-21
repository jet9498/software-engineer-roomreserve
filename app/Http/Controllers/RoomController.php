<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rsroom;
use App\Room;

class RoomController extends Controller
{
   

    public function view($id)
    {
      $Rooms = Room::find($id);
      return view('room.view')->with('Room',$Rooms);
    }
    public function table()
    {
      return view('room.table');
    }
}
