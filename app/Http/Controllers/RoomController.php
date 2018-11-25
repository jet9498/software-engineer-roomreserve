<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rsroom;
use App\Room;
use App\Table;
use \Auth;

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
    { $Rooms = array();
      $user_id= Auth::user()->id;
      $Rsrooms = Rsroom::where('userID',$user_id)->get();
      foreach ($Rsrooms as $Rsroom) {
        $Room = Room::find($Rsroom->roomID);
        array_push($Rooms,$Room -> roomName);
      }
      return view('room.myreservation')->with('Rsrooms',$Rsrooms)->with('Rooms',$Rooms);
    }
    public function destroyMyreservation($id)
    {
      $destroy = Rsroom::where('RsroomID',$id)->delete();
      return redirect()->back();
    }
}
