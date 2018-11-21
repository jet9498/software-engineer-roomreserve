<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use App\Rsroom;
use App\Room;
use App\User;

class ReservationsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function create($id,Request $request)
    {
      $room = Room::find($id);
      $create = new Rsroom;
      $create->userID = $request->input('userID',Auth::user()->id);
      $create->roomID = $request->input('roomID',$room->roomID);
      $RsDate = $request->input('RsDate');
      $RsDate=date('Y-m-d', strtotime($RsDate));
      $RsStart = $request->input('RsStart');
      $RsEnd = $request->input('RsEnd');
      $create->RsStart = $RsDate." ".$RsStart.":00";
      $create->RsEnd = $RsDate." ".$RsEnd.":00";
      $create->save();

      return redirect()->to('/room/reservations/'.$room->roomID);
    }
     public function index($id)
    {
      $Rooms = Room::find($id);
      $Rsroom = Rsroom::get();
      return view('room.reservations')->with('Room',$Rooms)->with('Rsroom',$Rsroom);
    }
}
