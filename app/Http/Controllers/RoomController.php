<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rsroom;
use App\Room;

class RoomController extends Controller
{
    public function index($id)
    {
      $Rooms = Room::find($id);
      $Rsroom = Rsroom::get();
      return view('room.reservations')->with('Room',$Rooms);
    }
    public function create($id,Request $request)
    {
      $room = Room::find($id);
      $create = new Rsroom;
      $create->RsroomName = $request->input('RsroomName',$room->roomName);
      $create->RsDate = $request->input('RsDate');
      $create->RsStart = $request->input('RsStart');
      $create->RsEnd = $request->input('RsEnd');
      $create->save();

      return redirect()->to('/room/reservations/'.$room->roomID);
    }
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
