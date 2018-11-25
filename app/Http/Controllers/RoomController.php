<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rsroom;
use App\Room;
use App\Table;

class RoomController extends Controller
{
    public function view($id)
    {
      $Rooms = Room::find($id);
      $Rsroom = Rsroom::get();
      $Table = Table::get();
      return view('room.view')->with('Room',$Rooms)->with('Rsroom',$Rsroom)->with('Table',$Table);
    }
    public function table($id)
    {
      $Rooms = Room::find($id);
      return view('room.table')->with('Room',$Rooms);
    }
    public function addtable($id)
    {
      $Rooms = Room::find($id);
      return view('room.table')->with('Room',$Rooms);
    }
    public function myreservation()
    {
      return view('room.myreservation');
    }
}
