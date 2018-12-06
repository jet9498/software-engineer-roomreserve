<?php

  namespace App\Http\Controllers;
  use Illuminate\Support\Facades\Hash;
  use Illuminate\Http\Request;
  use App\Room;
  use App\User;
  use App\Rsroom;
  use Auth;
  use Carbon\Carbon;
  use Illuminate\Support\Facades\Crypt;

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
        $users = User::where('status',0)->get();
        return view('room/manageid')->with('Rooms',$rooms)->with('Users',$users);
    }
    public function destroy($id){
                $user = User::where('id',$id)->first();

                User::where('id',$user->id)->delete();
                \Session::flash('flash_message4','ลบ user สำเร็จ');

                 return redirect()->back();
         }
    // public function changepassword(Request $request,$id){
        

    //     $admin = Auth::user()->status;
    //     $staff = -1;
    //     $rsroom = Rsroom::get();
    //     if($staff != Auth::user()->id){
    //         $staff = User::find($id);
    //     }      
    //     if(Auth::user()->id == $id || Auth::user()->status == 1){
    //         if(Auth::user()->id == 1 && Auth::user()->id != $id ){
    //             return view('manageid')->with('admin',$admin)
    //                                           ->with('staff',$staff)
    //                                           ->with('Rsroom',$rsroom);
    //         }
    //         else{
    //             return view('manageid')->with('admin',$admin)
    //                                           ->with('staff',$staff)
    //                                           ->with('Rsroom',$rsroom);
    //         }

    //     }
    //     else{
    //         return redirect()->back();
    //     }
        
    // }

    public function updatepassword(Request $request,$id){
        $idbefore = $id;

        $this->validate($request,[
                'password' => 'required|string|min:6|max:255|confirmed',
        ]);

        $update = User::find($id);
        if($update == null){
            return redirect()->back();
        }
            $update->password = Hash::make($request->input('password'));
            $update->save();
            \Session::flash('flash_message4','เปลี่ยนพาสเวิร์ดสำเร็จ!');
            if($id == auth::user()->id){
                return redirect()->back();
            }
            else{
                return redirect()->back();
            }  

    }
        public function updateinfo(Request $request,$id){
        $idbefore = $id;

        $this->validate($request,[
                'name' => 'required|string|max:255|',
        ]);

        $update = User::find($id);
        if($update == null){
            return redirect()->back();
        }
            $update->name = $request->input('name');
            $update->save();
            \Session::flash('flash_message4','เปลี่ยนชื่อสำเร็จ!');
            if($id == auth::user()->id){
                return redirect()->back();
            }
            else{
                return redirect()->back();
            }  

    }
  }

?>
