<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use App\Rsroom;
use App\Room;
use App\User;
use App\Table;
use App\Datetable;
use Carbon\Carbon;

class ReservationsController extends Controller
{
    public function create($id,Request $request)
    {

        $rooms = Room::find($id);
        $datetable = Datetable::get();
        $RsDate = $request->input('RsDate');
        $RsDate = date('Y-m-d', strtotime($RsDate));
        $Date = Carbon::parse($RsDate);
        $dateRentStart = $Date->toDateString();

        $timeStart = $request->input('RsStart');
        $timeStart = date('H:i', strtotime($timeStart));
        $timeStart .=':00';
        $timeStartinput = Carbon::parse($timeStart);
        $timeStartinput = $timeStartinput->toTimeString();

        $timeEnd = $request->input('RsEnd');
        $timeEnd = date('H:i', strtotime($timeEnd));
        $timeEnd .=':00';
        $timeEndinput = Carbon::parse($timeEnd);
        $timeEndinput = $timeEndinput->toTimeString();

        // $RsStart = $request->input('RsStart');
        // $RsStart = date('H:i', strtotime($RsStart));
        // $RsStart .=':00';
        // $timeStart = Carbon::parse($RsStart);
        // $timeStart = $timeStart->toTimeString();

        // $RsEnd = $request->input('RsEnd');
        // $timeEnd = Carbon::parse($RsEnd);
        // $timeEnd = $timeEnd->toTimeString();



        //จอง1ชม.ขึ้นไป
        $timeStart1Hour = Carbon::parse($timeStartinput);
        $timeEnd1Hour = Carbon::parse($timeEndinput);
        if($timeStart1Hour->diffInMinutes($timeEnd1Hour) < 60 ){
            \Session::flash('flash_message','กรุณาจองห้องอย่างน้อย 1 ชั่วโมง');
            return redirect()->back();
        }

        //เช็คจองเวลาที่ผ่านไปแล้ว
        $timenow = Carbon::now();
        $timenow = $timenow->toTimeString();
        $datenow = Carbon::today();
        $datenow = $datenow->toDateString();

        if($dateRentStart < $datenow){
                \Session::flash('flash_message','ไม่สามารถจองวันที่ผ่านไปแล้ว');
                return redirect()->back();
        }
        if($dateRentStart == $datenow){
            if($timeStartinput < $timenow ){
                \Session::flash('flash_message','ไม่สามารถจองเวลาที่ผ่านไปแล้ว');
                return redirect()->back();
            }
        }

        //จองได้9โมงเป็นต้นไป
        if($timeStartinput<'09:00:00'){
                \Session::flash('flash_message','เวลาในการจองห้องต้องอยู่ในช่วง 9.00 - 23.00');
                return redirect()->back();
        }

        //จองไม่เกิน5ทุ่ม
        // if($timeEndinput > '23:00:00'){
        //         \Session::flash('flash_message','เวลาในการจองห้องต้องอยู่ในช่วง 9.00 - 23.00');
        //         return redirect()->back();
        // }
        // if($timeEndinput < $timeStartinput){
        //         \Session::flash('flash_message','เวลาในการจองไม่ถูกต้อง(เวลาเริ่มมากกว่าเวลาสิ้นสุด)');
        //          return redirect()->back();
        // }

        //overlap
        $tables = Table::get();
        $rsrooms = Rsroom::get();
        $day = strtoupper(substr($Date->format('l'), 0, 2));

        //เช็คoverlapกับตารางเรียนทั้งเทอม
        foreach ($tables as $table) {
                if($table->roomID == $rooms->roomID){ //เช็คว่าห้องตรงกันมั้ย
                        if($dateRentStart == $table->Day){
                                if($timeStartinput == $table->TableStart){
                                        \Session::flash('flash_message','เวลานี้ไม่สามารถจองได้');
                                        return redirect()->back();
                                }
                                if($timeStartinput < $table->TableStart && $timeEndinput > $table->TableStart){
                                        \Session::flash('flash_message','เวลานี้ไม่สามารถจองได้');
                                        return redirect()->back();
                                }
                                if($timeStartinput > $table->TableStart && $timeStartinput < $table->TableEnd){
                                        \Session::flash('flash_message','เวลานี้ไม่สามารถจองได้');
                                        return redirect()->back();
                                }
                        }
                }
        }

        foreach ($datetable as $datetables) {
                $datetable1 = Carbon::parse($datetables->EndTerm);
                $datetable1 = $datetable1->toDateString();
                if($table->roomID == $rooms->roomID){ //เช็คว่าห้องตรงกันมั้ย
                        if($dateRentStart > $datetable1){
                              \Session::flash('flash_message','เกินกำหนดการจอง');
                              return redirect()->back();
                        }
                }
        }

        //เช็คoverlapกับคนที่จองก่อน
        foreach ($rsrooms as $rsroom) {
                if($rooms->roomID == $rsroom->roomID){
                        $datecheck = Carbon::parse($rsroom->RsStart);
                        $dateend = Carbon::parse($rsroom->RsEnd);
                        $datecheckStart = $datecheck->toDateString();
                        $timecheckStart = $datecheck->toTimeString();
                        $timecheckEnd = $dateend->toTimeString();

                        if($dateRentStart == $datecheckStart){
                                // dd("hi".$datecheckStart);
                                if($timeStartinput == $timecheckStart){
                                        \Session::flash('flash_message','เวลานี้มีคนจองแล้ว');
                                        return redirect()->back();
                                }
                                if($timeStartinput < $timecheckStart && $timeEndinput > $timecheckStart){
                                        \Session::flash('flash_message','เวลานี้มีคนจองแล้ว');
                                        return redirect()->back();
                                }
                                if($timeStartinput > $timecheckStart && $timeStartinput < $timecheckEnd){
                                        \Session::flash('flash_message','เวลานี้มีคนจองแล้ว');
                                        return redirect()->back();
                                }
                        }
                }
        }

        $create = new Rsroom;
        $create->userID = $request->input('userID',Auth::user()->id);
        $create->roomID = $request->input('roomID',$rooms->roomID);
        $create->RsStart = $dateRentStart." ".$timeStartinput;
        $create->RsEnd = $dateRentStart." ".$timeEndinput;
        $create->save();
        \Session::flash('flash_message2','จองเวลาสำเร็จ!');
        return redirect()->to('/room/reservations/'.$rooms->roomID);
    }
     public function index($id)
    {
      $Rooms = Room::find($id);
      $Rsroom = Rsroom::get();
      $Table = Table::get();
      $user = User::get();
      $datetable= Datetable::get();

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
            return view('room.reservations')->with('Room',$Rooms)->with('Rsroom',$Rsroom)->with('Table',$Table)->with('status',$status)->with('user',$user)->with('Datetable',$datetable);
      }
      return view('room.reservations')->with('Room',$Rooms)->with('Rsroom',$Rsroom)->with('Table',$Table)->with('user',$user)->with('Datetable',$datetable);

    }
    public function destroyReserve($id){
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
