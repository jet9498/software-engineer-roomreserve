<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class HomeController extends Controller
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
    public function index()
    {
        $fail = 0;
        $rooms = Room::get();
        return view('home')->with('Rooms',$rooms)->with('fail',$fail);
    }
    public function checklogin()
    {
        return view('checklogin');
    }
}
