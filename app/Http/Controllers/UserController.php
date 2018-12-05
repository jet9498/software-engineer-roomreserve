<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Rsroom;
use App\Room;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
class UserController extends Controller
{
        public function index(){
                $Rooms = Room::get();
                $Rsroom = Rsroom::get();

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
                      return view('room.usercreate')->with('Room',$Rooms)->with('Rsroom',$Rsroom)->with('status',$status);
                }
                return view('room.usercreate')->with('Room',$Rooms)->with('Rsroom',$Rsroom);
        }

        public function destroy($id){
                $Rsrooms = Rsroom::find($id);
                $user = Auth::user()->id;
                // dd($user);
                if($Rsrooms->userID == $user){
                        $delete = Rsroom::where('RsroomID',$Rsrooms->RsroomID)->delete();
                        \Session::flash('flash_message4','ยกเลิกจองสำเร็จ!');
                }
                else{
                        \Session::flash('flash_message3','ไม่สามารถยกเลิกการจองของผู้อื่นได้');
                }
                return redirect()->back();
        }
        public function changepassword(Request $request,$id){
        
        try {
            $id = Crypt::decrypt($id);
        } catch (DecryptException $e) {
            return redirect()->to('/error404');
        }
        $admin = Auth::user()->status;
        $staff = -1;
        if($staff != Auth::user()->id){
            $staff = User::find($id);
        }      
        if(Auth::user()->id == $id || Auth::user()->status == 1){
            if(Auth::user()->id == 1 && Auth::user()->id != $id ){
                return view('room.usercreate')->with('admin',$admin)
                                              ->with('staff',$staff);
            }
            else{
                return view('room.usercreate')->with('admin',$admin)
                                              ->with('staff',$staff);
            }

        }
        else{
            return redirect()->back();
        }
        
    }

    public function updatepassword(Request $request,$id){
        $idbefore = $id;
        try {
            $id = Crypt::decrypt($id);
        } catch (DecryptException $e) {
            return redirect()->to('/error404');
        }
        $this->validate($request,[
                'password' => 'required|string|min:6|max:255|confirmed',
        ]);  
        $update = User::find($id);
        if($update == null){
            return redirect()->back();
        }
        if(password_verify($request->input('oldpassword'),$update->password) ){
            $update->password = Hash::make($request->input('password'));
            $update->save();
            \Session::flash('flash_message','เปลี่ยนพาสเวิร์ดสำเร็จ!');
            if($id == auth::user()->id){
                return redirect()->to('/room/usercreate/'.$idbefore);
            }
            else{
                return redirect()->to('/room/'.$id);
            }
        }   
        else{
             $fail = 0;
             //dd('/room/usercreate/'.$idbefore);
            if(Auth::user()->id == $id ){
                $fail = 1;
                \Session::flash('flash_message','พาสเวิร์ดเก่าของคุณไม่ถูกต้อง');
                return redirect()->back()->with('fail',$fail);;
            }
            else{
                
                $update->password = Hash::make($request->input('password'));
                $update->save();
                \Session::flash('flash_message4','เปลี่ยนพาสเวิร์ดสำเร็จ!');
                if($id == auth::user()->id){

                    return redirect()->to('/room/usercreate/');
                }
                else{
                    return redirect()->to('/room/'.$id);
                }
            }
        }

    }
}
