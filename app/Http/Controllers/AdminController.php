<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Room;

  class AdminController extends Controller {

    public function index(){
      $rooms = Room::get();
      return view('adminview')->with('Rooms',$rooms);
    }
  }

?>
