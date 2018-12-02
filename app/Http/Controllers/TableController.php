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
}
