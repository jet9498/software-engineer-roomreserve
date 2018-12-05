<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use App\User;
use App\Rsroom;
use App\Room;
use Carbon\Carbon;

class UserController extends Controller
{
        public function index(){
                $users = User::get();
                return view('room.usercreate')->with('users',$users);
        }

        public function destroy($id){
                $user = User::where('id',$id)->first();

                User::where('id',$user->id)->delete();
                \Session::flash('flash_message3','ลบ user สำเร็จ');

                return redirect()->back();
        }
}
