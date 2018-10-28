<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rsroom;

class RoomController extends Controller
{
    public function index()
    {
      return view('room.reservations');
    }
    public function create(Request $request)
    {
      $create = new Rsroom;
      $create->RsroomName = $request->input('RsroomName');
      $create->RsDate = $request->input('RsDate');
      $create->RsStart = $request->input('RsStart');
      $create->RsEnd = $request->input('RsEnd');
      $create->save();

      return redirect()->to('/room/reservations');
    }
    public function view()
    {
      return view('room.view');
    }
    public function table()
    {
      return view('room.table');
    }
}
