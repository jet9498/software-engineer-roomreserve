<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Rsroom;
use App\Room;
use App\Table;
use Carbon\Carbon;

class TableController extends Controller
{
    public function table($id)
    {
      $Rooms = Room::find($id);
      $Tables = Table::get();
      $Rsroom = Rsroom::get();
      return view('room.addtable')->with('Room',$Rooms)->with('Table',$Tables)->with('Rsroom',$Rsroom);
    }
    public function addtable($id,Request $request)
    {
      $room = Room::find($id);
      $Tables = Table::get();
      $Rsrooms = Rsroom::get();

      foreach ($Tables as $Table){
        if($Table->roomID == $room->roomID){
            $delete=Table::where('TableID',$Table->TableID)->delete();
        }
      }
     
      $Day = $request->input('Day');
      $Date = $request->input('Date');
      $Date = date('Y-m-d', strtotime($Date));
      for($i=0;$i<count($Day);$i++){
        if($Day[$i]=="MO"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->Date = $request->input('AddDate',$Date);
          foreach ($Rsrooms as $Rsroom){
            if($Rsroom->roomID == $room->roomID){
                $timeStartinput = Carbon::parse($Rsroom->RsStart);
                $timeStartinput = $timeStartinput->toTimeString();

                $timeEndinput = Carbon::parse($Rsroom->RsEnd);
                $timeEndinput = $timeEndinput->toTimeString();

                $RsDate = date('Y-m-d', strtotime($Rsroom->RsStart));
                $Date = Carbon::parse($RsDate);
                $dateRentStart = strtoupper(substr($Date->format('l'), 0, 2));

                if($dateRentStart == $Day[$i]){
                        if($timeStartinput == $create->TableStart){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                        if($timeStartinput < $Table->TableStart && $timeEndinput > $Table->TableStart){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                        if($timeStartinput > $Table->TableStart && $timeStartinput < $Table->TableEnd){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                }   
            }
          }
          $create->save();
        }
        if($Day[$i]=="TU"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->Date = $request->input('AddDate',$Date);
          foreach ($Rsrooms as $Rsroom){
            if($Rsroom->roomID == $room->roomID){
                $timeStartinput = Carbon::parse($Rsroom->RsStart);
                $timeStartinput = $timeStartinput->toTimeString();

                $timeEndinput = Carbon::parse($Rsroom->RsEnd);
                $timeEndinput = $timeEndinput->toTimeString();

                $RsDate = date('Y-m-d', strtotime($Rsroom->RsStart));
                $Date = Carbon::parse($RsDate);
                 $dateRentStart = strtoupper(substr($Date->format('l'), 0, 2));

                if($dateRentStart == $Day[$i]){
                        if($timeStartinput == $create->TableStart){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                        if($timeStartinput < $Table->TableStart && $timeEndinput > $Table->TableStart){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                        if($timeStartinput > $Table->TableStart && $timeStartinput < $Table->TableEnd){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                }   
            }
          }
          $create->save();
        }
        if($Day[$i]=="WE"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->Date = $request->input('AddDate',$Date);
          foreach ($Rsrooms as $Rsroom){
            if($Rsroom->roomID == $room->roomID){
                $timeStartinput = Carbon::parse($Rsroom->RsStart);
                $timeStartinput = $timeStartinput->toTimeString();

                $timeEndinput = Carbon::parse($Rsroom->RsEnd);
                $timeEndinput = $timeEndinput->toTimeString();

                $RsDate = date('Y-m-d', strtotime($Rsroom->RsStart));
                $Date = Carbon::parse($RsDate);
                 $dateRentStart = strtoupper(substr($Date->format('l'), 0, 2));

                if($dateRentStart == $Day[$i]){
                        if($timeStartinput == $create->TableStart){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                        if($timeStartinput < $Table->TableStart && $timeEndinput > $Table->TableStart){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                        if($timeStartinput > $Table->TableStart && $timeStartinput < $Table->TableEnd){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                }   
            }
          }
          $create->save();
        }
        if($Day[$i]=="TH"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->Date = $request->input('AddDate',$Date);
          foreach ($Rsrooms as $Rsroom){
            if($Rsroom->roomID == $room->roomID){
                $timeStartinput = Carbon::parse($Rsroom->RsStart);
                $timeStartinput = $timeStartinput->toTimeString();

                $timeEndinput = Carbon::parse($Rsroom->RsEnd);
                $timeEndinput = $timeEndinput->toTimeString();

                $RsDate = date('Y-m-d', strtotime($Rsroom->RsStart));
                $Date = Carbon::parse($RsDate);
                $dateRentStart = strtoupper(substr($Date->format('l'), 0, 2));
                
                if($dateRentStart == $Day[$i]){
                        if($timeStartinput == $create->TableStart){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                        if($timeStartinput < $Table->TableStart && $timeEndinput > $Table->TableStart){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                        if($timeStartinput > $Table->TableStart && $timeStartinput < $Table->TableEnd){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                }   
            }
          }
          $create->save();
        }
        if($Day[$i]=="FR"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->Date = $request->input('AddDate',$Date);
          foreach ($Rsrooms as $Rsroom){
            if($Rsroom->roomID == $room->roomID){
                $timeStartinput = Carbon::parse($Rsroom->RsStart);
                $timeStartinput = $timeStartinput->toTimeString();

                $timeEndinput = Carbon::parse($Rsroom->RsEnd);
                $timeEndinput = $timeEndinput->toTimeString();

                $RsDate = date('Y-m-d', strtotime($Rsroom->RsStart));
                $Date = Carbon::parse($RsDate);
                 $dateRentStart = strtoupper(substr($Date->format('l'), 0, 2));

                if($dateRentStart == $Day[$i]){
                        if($timeStartinput == $create->TableStart){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                        if($timeStartinput < $Table->TableStart && $timeEndinput > $Table->TableStart){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                        if($timeStartinput > $Table->TableStart && $timeStartinput < $Table->TableEnd){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                }   
            }
          }
          $create->save();
        }
        if($Day[$i]=="SA"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->Date = $request->input('AddDate',$Date);
          foreach ($Rsrooms as $Rsroom){
            if($Rsroom->roomID == $room->roomID){
                $timeStartinput = Carbon::parse($Rsroom->RsStart);
                $timeStartinput = $timeStartinput->toTimeString();

                $timeEndinput = Carbon::parse($Rsroom->RsEnd);
                $timeEndinput = $timeEndinput->toTimeString();

                $RsDate = date('Y-m-d', strtotime($Rsroom->RsStart));
                $Date = Carbon::parse($RsDate);
                 $dateRentStart = strtoupper(substr($Date->format('l'), 0, 2));

                if($dateRentStart == $Day[$i]){
                        if($timeStartinput == $create->TableStart){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                        if($timeStartinput < $Table->TableStart && $timeEndinput > $Table->TableStart){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                        if($timeStartinput > $Table->TableStart && $timeStartinput < $Table->TableEnd){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                }   
            }
          }
          $create->save();
        }
        if($Day[$i]=="SU"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->Date = $request->input('AddDate',$Date);
          foreach ($Rsrooms as $Rsroom){
            if($Rsroom->roomID == $room->roomID){
                $timeStartinput = Carbon::parse($Rsroom->RsStart);
                $timeStartinput = $timeStartinput->toTimeString();

                $timeEndinput = Carbon::parse($Rsroom->RsEnd);
                $timeEndinput = $timeEndinput->toTimeString();

                $RsDate = date('Y-m-d', strtotime($Rsroom->RsStart));
                $Date = Carbon::parse($RsDate);
                 $dateRentStart = strtoupper(substr($Date->format('l'), 0, 2));

                if($dateRentStart == $Day[$i]){
                        if($timeStartinput == $create->TableStart){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                        if($timeStartinput < $Table->TableStart && $timeEndinput > $Table->TableStart){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                        if($timeStartinput > $Table->TableStart && $timeStartinput < $Table->TableEnd){
                                \Session::flash('flash_message','มีการจองห้องอยู่');
                                return redirect()->back();
                        }
                }   
            }
          }
          $create->save();
        }
      }
      return redirect()->to('/room/addtable/'.$room->roomID);
    }

     public function delete($id){
            $Rsrooms = Rsroom::find($id);
            $delete = Rsroom::where('RsroomID',$Rsrooms->RsroomID)->delete();
            return redirect()->back();
    }

    public function create($id,Request $request)
    {   
        
        $rooms = Room::find($id);
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
        if($timeEndinput > '23:00:00'){
                \Session::flash('flash_message','เวลาในการจองห้องต้องอยู่ในช่วง 9.00 - 23.00');
                return redirect()->back();
        }
        if($timeEndinput < $timeStartinput){
                \Session::flash('flash_message','เวลาในการจองไม่ถูกต้อง');
                 return redirect()->back();
        }

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

        foreach ($tables as $table) {
                $datetable = Carbon::parse($table->Date);
                $datetable = $datetable->toDateString();
                if($table->roomID == $rooms->roomID){ //เช็คว่าห้องตรงกันมั้ย
                        if($dateRentStart > $datetable){
                                if($dateRentStart >= $table->Date){
                                        \Session::flash('flash_message','เกินกำหนดการจอง');
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
        $create->RsStart = $dateRentStart." ".$timeStartinput;
        $create->RsEnd = $dateRentStart." ".$timeEndinput;
        $create->save();
        \Session::flash('flash_message2','จองเวลาสำเร็จ!');
        return redirect()->to('/room/addtable/'.$rooms->roomID);
    }
    
}
