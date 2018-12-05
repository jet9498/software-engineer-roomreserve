<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Room;
  use App\User;

  class AdminController extends Controller {

    public function index(){
      $rooms = Room::get();
      return view('room/adminview')->with('Rooms',$rooms);
    }
    public function register(Request $request){
        $this->validate($request,[
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:6|confirmed',
        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password =  bcrypt($request->input('password'));
        $user->save();

        return redirect()->back()->with('message', 'สร้าง ไอดีสำเร็จ!');;
    }
    public function manageid()
    {
        $rooms = Room::get();
        return view('room/manageid')->with('Rooms',$rooms);
    }
  }

?>
