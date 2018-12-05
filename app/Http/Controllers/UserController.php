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
                $Rooms = Room::get();
                $Rsroom = Rsroom::get();

                $i=0;
                $j=0;
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
                $status[0]=null;
                if(count($Rsroom)!=0){
                      foreach ($Rsroom as $Rsrooms) {
                              foreach ($Rooms as $Room) {
                                      if(Auth::user()->id == $Rsrooms->userID){
                                              $timenow = Carbon::now();
                                              $timenow = $timenow->toDatetimeString();
                                              $timestart = $Rsrooms->RsStart;
                                              $timeout = $Rsrooms->RsEnd;
                                            if($Rsrooms->roomID==$Room->roomID){
                                                      $roomName[$j] = $Room->roomName;
                                                      if($timenow >= $timestart){
                                                                $status[$i] = "กำลังใช้งาน";

                                                      }
                                                      else {
                                                                $status[$i] = "รอใช้งาน";
                                                      }
                                                      $i++;
                                                      $j++;
                                            }

                                      }
                              }
                              //dd($roomName[0].$roomName[1]);

                      }

                      //dd($status);
                      if($status[0]!=null){
                              return view('room.usercreate')->with('Room',$Rooms)->with('Rsroom',$Rsroom)->with('status',$status)->with('roomName',$roomName);
                      }
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
}
