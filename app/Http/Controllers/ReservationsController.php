<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use App\Rsroom;
use App\Room;
use App\User;
use App\Table;
use Carbon\Carbon;

class ReservationsController extends Controller
{
    public function create($id,Request $request)
    {
        $rooms = Room::find($id);


        $RsDate = $request->input('RsDate');
        $RsDate=date('Y-m-d', strtotime($RsDate));
        $Rent = Carbon::parse($RsDate);
        $dateRentStart = $Rent->toDateString();

        $RsStart = $request->input('RsStart');
        $RsStart = date('H:i', strtotime($RsStart));
        $RsStart .=':00';

        $timeStart = Carbon::parse($RsStart);
        $timeStart = $timeStart->toTimeString();

        $RsEnd = $request->input('RsEnd');
        $timeEnd = Carbon::parse($RsEnd);
        $timeEnd = $timeEnd->toTimeString();



        //จอง1ชม.ขึ้นไป
        $timeStart1Hour = Carbon::parse($RsStart);
        $timeEnd1Hour = Carbon::parse($RsEnd);
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
            if($timeStart < $timenow ){
                \Session::flash('flash_message','ไม่สามารถจองเวลาที่ผ่านไปแล้ว');
                return redirect()->back();
            }
        }

        //จองได้9โมงเป็นต้นไป
        if($timeStart<'09:00:00'){
                \Session::flash('flash_message','เวลาในการจองห้องต้องอยู่ในช่วง 9.00 - 23.00');
                return redirect()->back();
        }

        //จองไม่เกิน5ทุ่ม
        if($timeEnd > '23:00:00'){
                \Session::flash('flash_message','เวลาในการจองห้องต้องอยู่ในช่วง 9.00 - 23.00');
                return redirect()->back();
        }
        if($timeEnd < $timeStart){
                \Session::flash('flash_message','เวลาในการจองไม่ถูกต้อง');
                 return redirect()->back();
        }

        //overlap
        $tables = Table::get();
        $rsrooms = Rsroom::get();
        $RsDate = $request->input('RsDate');
        $Date = Carbon::parse($RsDate);
        $dateRentStart = $Date->toDateString();
        $day = strtoupper(substr($Date->format('l'), 0, 2));

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
        $create->RsStart = $RsDate." ".$RsStart;
        $create->RsEnd = $RsDate." ".$RsEnd;
        $create->save();
        \Session::flash('flash_message2','จองเวลาสำเร็จ!');
        return redirect()->to('/room/reservations/'.$room->roomID);
    }
     public function index($id)
    {
      $Rooms = Room::find($id);
      $Rsroom = Rsroom::get();
      return view('room.reservations')->with('Room',$Rooms)->with('Rsroom',$Rsroom);
    }
}
