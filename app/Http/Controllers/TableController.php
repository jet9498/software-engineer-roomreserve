<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Rsroom;
use App\Room;
use App\Table;
use App\User;
use App\Datetable;
use Carbon\Carbon;

class TableController extends Controller
{
    public function table($id)
    {
      $Rooms = Room::find($id);
      $Tables = Table::get();
      $Rsroom = Rsroom::get();
      $datetable = Datetable::get();
      return view('room.addtable')->with('Room',$Rooms)->with('Table',$Tables)->with('Rsroom',$Rsroom)->with('Datetable',$datetable);
    }
    public function addtable($id,Request $request)
    {
      $room = Room::find($id);
      $Tables = Table::get();
      $Rsrooms = Rsroom::get();
      $datetable = Datetable::get();
      $create = new Table;
      $create->roomID = $request->input('TableID',$room->roomID);
      $create->Subject = $request->input('Subject');
      $create->Day = $request->input('Day');
      $TableStart = $request->input('TableStart');
      $TableEnd = $request->input('TableEnd');
      $create->TableStart = $TableStart.':00';
      $create->TableEnd = $TableEnd.':00';

      if($create->TableStart > $create->TableEnd){
              \Session::flash('flash_message','เวลาเริ่มต้องน้อยกว่าเวลาจบ');
              return redirect()->back();
      }
      if($create->TableStart == $create->TableEnd){
              \Session::flash('flash_message','เวลาเริ่มต้องไม่เท่ากับเวลาจบ');
              return redirect()->back();
      }
      if($create->TableStart<'09:00:00'){
              \Session::flash('flash_message','เวลาในการจองต้องอยู่ในช่วง 9.00 - 22.00');
              return redirect()->back();
      }

      if($create->TableEnd > '22:00:00'){
              \Session::flash('flash_message','เวลาในการจองต้องอยู่ในช่วง 9.00 - 22.00');
              return redirect()->back();
      }

      if(count($Tables)!=0){
        foreach ($Tables as $Table) {
          if($create->Day == $Table->Day){
              if($Table->TableStart == $create->TableStart || $Table->TableStart == $create->TableEnd){
                      \Session::flash('flash_message','เวลานี้มีวิชาอื่นอยู่แล้ว');
                      return redirect()->back();
              }
              if($Table->TableStart < $create->TableStart && $Table->TableEnd > $create->TableStart){
                      \Session::flash('flash_message','เวลานี้มีวิชาอื่นอยู่แล้ว');
                      return redirect()->back();
              }
              if($Table->TableStart > $create->TableStart && $Table->TableStart < $create->TableEnd){
                      \Session::flash('flash_message','เวลานี้มีวิชาอื่นอยู่แล้ว');
                      return redirect()->back();
              }
          }
        }
      }
      if(count($Rsrooms)!=0){
        foreach ($Rsrooms as $Rsroom) {
          $RsDate = $Rsroom->RsStart;
          $RsDate = date('Y-m-d', strtotime($RsDate));
          $Date = Carbon::parse($RsDate);
          $Day = strtoupper(substr($Date->format('l'), 0, 2));

          $RsStart = $Rsroom->RsStart;
          $RsStart = date('H:i', strtotime($RsStart));
          $RsStart .=':00';
          $RsStart = Carbon::parse($RsStart);
          $RsStart = $RsStart->toTimeString();

          $RsEnd = $Rsroom->RsEnd;
          $RsEnd = date('H:i', strtotime($RsEnd));
          $RsEnd .=':00';
          $RsEnd = Carbon::parse($RsEnd);
          $RsEnd = $RsEnd->toTimeString();

          if($create->Day == $Day){
              if($RsStart == $create->TableStart || $RsStart == $create->TableEnd){
                      \Session::flash('flash_message','เวลานี้มีคนจองอยู่');
                      return redirect()->back();
              }
              if($RsStart < $create->TableStart && $RsEnd > $create->TableStart){
                      \Session::flash('flash_message','เวลานี้มีคนจองอยู่');
                      return redirect()->back();
              }
              if($RsStart > $create->TableStart && $RsStart < $create->TableEnd){
                      \Session::flash('flash_message','เวลานี้มีคนจองอยู่');
                      return redirect()->back();
              }
          }
        }
      }


      foreach ($datetable as $datetables) {
        if($datetables->roomID == $room->roomID){
              $delete = Datetable::where('TableID',$datetables->TableID)->delete();
        }
      }
      $create1 = new Datetable;
      $create1->roomID = $request->input('TableID',$room->roomID);
      $EndTerm = $request->input('EndTerm');
      $create1->EndTerm = date('Y-m-d', strtotime($EndTerm));

      if(count($Rsrooms)!=0){
        foreach ($Rsrooms as $Rsroom) {
          $RsDate = $Rsroom->RsStart;
          $RsDate = date('Y-m-d', strtotime($RsDate));
          $Date = Carbon::parse($RsDate);
          $Date = $Date->toDateString();

          if($create1->EndTerm < $Date){
                  \Session::flash('flash_message','End Term ทับกับคนจอง');
                  return redirect()->back();
          }
        }
      }
      $timenow = Carbon::now();
      $timenow = $timenow->toTimeString();
      $datenow = Carbon::today();
      $datenow = $datenow->toDateString();

      if($create1->EndTerm < $datenow){
              \Session::flash('flash_message','End Term ต้องมากกว่าวันปัจจุบัน');
              return redirect()->back();
      }

      $create->save();
      $create1->save();
      \Session::flash('flash_message4','ลงเวลาสำเร็จ');
      return redirect()->to('/room/addtable/'.$room->roomID);
    }

     public function delete($id){
            $Table = Table::find($id);
            $delete = Table::where('TableID',$Table->TableID)->delete();
            return redirect()->back();
    }

}
