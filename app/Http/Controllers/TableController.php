<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rsroom;
use App\Room;
use App\Table;

class TableController extends Controller
{
    public function table($id)
    {
      $Rooms = Room::find($id);
      $Tables = Table::get();
      return view('room.addtable')->with('Room',$Rooms)->with('Table',$Tables);
    }
    public function addtable($id,Request $request)
    {
      $room = Room::find($id);
      $Tables = Table::get();
      foreach ($Tables as $Table){
        if($Table->roomID == $room->roomID){
            $delete=Table::where('TableID',$Table->TableID)->delete();
        }
      }

      $Day = $request->input('Day');
      for($i=0;$i<count($Day);$i++){
        if($Day[$i]=="จันทร์"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->save();
        }
        if($Day[$i]=="อังคาร"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->save();
        }
        if($Day[$i]=="พุธ"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->save();
        }
        if($Day[$i]=="พฤหัสบดี"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->save();
        }
        if($Day[$i]=="ศุกร์"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->save();
        }
        if($Day[$i]=="เสาร์"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->save();
        }
        if($Day[$i]=="อาทิตย์"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->save();
        }
      }


      return redirect()->to('/room/addtable/'.$room->roomID);
    }
}
