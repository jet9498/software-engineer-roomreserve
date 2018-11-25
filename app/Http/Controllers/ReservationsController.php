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
        $room = Room::find($id);
        $create = new Rsroom;
        $create->userID = $request->input('userID',Auth::user()->id);
        $create->roomID = $request->input('roomID',$room->roomID);

        $RsDate = $request->input('RsDate');
        $RsDate=date('Y-m-d', strtotime($RsDate));
        $Rent = Carbon::parse($RsDate);
        $dateRentStart = $Rent->toDateString();

        $RsStart = $request->input('RsStart');
        $RsStart = date('H:i', strtotime($RsStart));
        $RsStart .=':00';

        $timeStart = Carbon::parse($RsStart);
        $timeStart = $timeStart->toTimeString();
        if($timeStart == '00:00:00'){
            $timeStart = '00:00:10';
        }

        $RsEnd = $request->input('RsEnd');
        $timeEnd = Carbon::parse($RsEnd);
        $timeEnd = $timeEnd->toTimeString();
        if($timeEnd == '00:00:00'){
            $timeEnd = '23:59:59';
        }

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
                \Session::flash('flash_message','ไม่สามารถจองวัน/เวลาที่ผ่านไปแล้ว');
                return redirect()->back();
        }
        if($dateRentStart == $datenow){
            if($timeStart < $timenow ){
                \Session::flash('flash_message','ไม่สามารถจองวัน/เวลาที่ผ่านไปแล้ว');
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

      $create->RsStart = $RsDate." ".$RsStart;
      $create->RsEnd = $RsDate." ".$RsEnd;
      $create->save();

      return redirect()->to('/room/reservations/'.$room->roomID);
    }
     public function index($id)
    {
      $Rooms = Room::find($id);
      $Rsroom = Rsroom::get();
      $Table = Table::get();
      return view('room.reservations')->with('Room',$Rooms)->with('Rsroom',$Rsroom)->with('Table',$Table);
    }
}
