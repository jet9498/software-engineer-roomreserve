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
        public function index($id){
                $Rooms = Room::find($id);
                $Rsroom = Rsroom::find($id);

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
                      return view('/user')->with('Room',$Rooms)->with('Rsroom',$Rsroom)->with('status',$status);
                }
                return view('/user')->with('Room',$Rooms)->with('Rsroom',$Rsroom);
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
}
