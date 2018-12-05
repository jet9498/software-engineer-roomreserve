<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Rsroom;
use App\Room;
use App\Table;
use App\User;
use App\Datetable;
use Carbon\Carbon;

class RoomController extends Controller
{
    public function view($id)
    {
      $Rooms = Room::find($id);
      $Rsroom = Rsroom::get();
      $datetable = Datetable::get();
      $Table = Table::get();
      $user = User::get();

      $i=0;
      foreach ($Rsroom as $Rsrooms) {
          $timenow = Carbon::now();
          $timenow = $timenow->toDatetimeString();
          $timestart = $Rsrooms->RsStart;
          $timeout = $Rsrooms->RsEnd;
          // dd($timeout);
          //dd("hi");
          if($timenow > $timeout){
                  $delete = Rsroom::where('RsroomID',$Rsrooms->RsroomID)->delete();
          }
      }
        if(count($Rsroom)!=0){

            foreach ($Rsroom as $Rsrooms) {
                    $timenow = Carbon::now();
                      $timenow = $timenow->toDatetimeString();
                      $timestart = $Rsrooms->RsStart;
                      $timeout = $Rsrooms->RsEnd;
                    if($timenow >= $timestart){

                              $status[$i] = "กำลังใช้งาน";
                              $i++;
                    }
                    else {
                              $status[$i] = "รอใช้งาน";
                              $i++;
                    }

            }
            return view('room.view')->with('Room',$Rooms)->with('Rsroom',$Rsroom)->with('Table',$Table)->with('status',$status)->with('user',$user)->with('Datetable',$datetable);
      }
      return view('room.view')->with('Room',$Rooms)->with('Rsroom',$Rsroom)->with('Table',$Table)->with('user',$user)->with('Datetable',$datetable);
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
    public function store(Request $request)
    {
      $room = new Room;
      $room->roomName = $request->input('roomName');
      $room->roomDescription = $request->input('roomDescription');
      $room->imgUrl = $request->input('imgUrl');

      $room->save();

      return redirect()->back();
    }
    public function edit(Request $request,$id)
    {
      $room = Room::find($id);
      $room->roomName = $request->input('roomName');
      $room->roomDescription = $request->input('roomDescription');
      $room->imgUrl = $request->input('imgUrl');

      $room->save();

      return redirect()->back();
    }
     public function delete($id)
    {

     $destroy = Room::where('roomID',$id)->delete();
      return redirect()->back();
    }
}
