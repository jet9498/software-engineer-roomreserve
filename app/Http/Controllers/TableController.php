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
      $Rsrooms = Rsroom::get();
      foreach ($Tables as $Table){
        if($Table->roomID == $room->roomID){
            $delete=Table::where('TableID',$Table->TableID)->delete();
        }
      }
      foreach ($Rsrooms as $Rsroom){
        if($Rsroom->roomID == $room->roomID){
            $delete=Rsroom::where('RsroomID',$Rsroom->RsroomID)->delete();
        }
      }

      $Day = $request->input('Day');
      for($i=0;$i<count($Day);$i++){
        if($Day[$i]=="MO"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->save();
        }
        if($Day[$i]=="TU"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->save();
        }
        if($Day[$i]=="WE"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->save();
        }
        if($Day[$i]=="TH"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->save();
        }
        if($Day[$i]=="FR"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->save();
        }
        if($Day[$i]=="SA"){
          $create = new Table;
          $create->roomID = $request->input('TableID',$room->roomID);
          $create->Day = $request->input('AddDay',$Day[$i]);
          $create->TableStart = $request->input('TableStart',$Day[$i+1]);
          $create->TableEnd = $request->input('TableEnd',$Day[$i+2]);
          $create->save();
        }
        if($Day[$i]=="SU"){
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
