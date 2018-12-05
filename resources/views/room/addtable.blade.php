<!DOCTYPE html>
<html lang="en"><head>
    <title>Addtable</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="CG07Q6CxQFBmUXetWruibRxDBe6jXXQ4ZM67Mg6J">



    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/styleHome.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styleaddtable.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/stylesemantic.css') }}">
     <link rel="stylesheet" href="{{ asset('/css/styleapp.css') }}">
     <link rel="stylesheet" href="{{ asset('/css/styleReservations.css') }}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="{{ asset('/js/styleapp.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

  <link rel="stylesheet" href="{{ asset('/css/Datetimepicker.css') }}">

  <script src="{{ asset('/js/datetimepicker.min.js') }}"></script>
<body id="bodycolor">


  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid"style="background-color:#2E2E2E">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="myNavbar"style="width: -webkit-fill-available">
        <ul class="nav navbar-nav navbar-left" id="left-Menu">


          <li style="border-bottom:2px solid red;"><a href="/">หน้าแรก</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in" ></span> เข้าสู่ระบบ</a></li>

        @else
            <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-in" ></span> {{Auth::user()->name}}</a></li>
        @endif


        </ul>
      </div>
    </div>
  </nav>

<div class="modal fade " id="fam" role="dialog" style="z-index: 9999">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ข้อปฏิบัติในการใช้งานการจองห้อง</h4>
        </div>
        <div class="modal-body">
          <p>
        <b>
          <span>1) เวลาการจองห้องต้องอยู่ในช่วง 45 นาที - 3 ชั่วโมง และสามารถจองล่วงหน้าได้ 1 เดือนเท่านั้น</span>
          <br>
          <span>2) ท่านสามารถยกเลิก / แก้ไข การจองของตนเองได้ที่หน้าการจองของท่านได้ทันที</span>
          <br>
          <span>3) เปิดให้บริการ วันจันทร์ - อาทิตย์ เวลา 9.00 - 23.00 น.</span>
          <br>
          <span>4) หากท่านลืมรหัสผ่านท่านสามารถติดต่อ Admin เพื่อทำการขอรหัสผ่านใหม่ได้</span>
        <br>
        <br>
        <span class ="pull-right" ><font color ="#711400">ROOM RESERVATION </font></span>
        </b>
      </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>


<!-- ติดต่อเรา-->
  <div class="modal fade " id="contact" role="dialog" style="z-index: 9999">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ติดต่อเรา</h4>
        </div>
        <div class="modal-body">
          <p>
        <b>
          <span>Room Kasetsart University Sriracha Campus</span>
          <br>
          <span>เว็บไซต์ : -</span>
          <br>
          <span>อีเมลล์ : -</span>
          <br>
          <span>โทรศัพท์ : -</span>

        <br>
        <br>
        <span class ="pull-right" ><font color ="#711400">ROOM RESERVATION </font></span>
        </b>
      </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>



    <div id="loading">
    </div>
    <div id="app">
        <audio id="audio" src="http://libapp.src.ku.ac.th/sound/noti.mp3" autostart="false"></audio>

        <div class="container transition visible" id="allmenu" style="display: block !important;">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
          <br>
          <br>
          <br>
          <br>

           @if(Session::has('flash_message'))
            <div class="alert alert-danger"><em> <center><li>{!! session('flash_message') !!}</li></center></em></div>
          @endif
          @if(Session::has('flash_message2'))
            <div class="alert alert-success"><em> <center><li>{!! session('flash_message2') !!}</li></center></em></div>
          @endif
          @if(Session::has('flash_message3'))
            <div class="alert alert-danger"><em> <center><li>{!! session('flash_message3') !!}</li></center></em></div>
          @endif
          @if(Session::has('flash_message4'))
            <div class="alert alert-success"><em> <center><li>{!! session('flash_message4') !!}</li></center></em></div>
          @endif
          <h2 class="ui left floated header"style="width:100%"><font id="statustext" size="6" color="#B92000">STATUS</font><br>
            <font id="roomnametext" size="5" color="#828282">{{$Room->roomName}}</font>
            <div class="hr"></div>
          </h2>

                    <!-- ////////////////////// ส่วนของตาราง //////////////// -->
                    <?php
                    // ส่วนของตัวแปรสำหรับกำหนด
                    $thai_day_arr=array("จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์","อาทิตย์");
                    $eng_day_arr=array("MO","TU","WE","TH","FR","SA","SU");
                    ////////////////////// ส่วนของการจัดการตารางเวลา /////////////////////
                    $num_dayShow=7;  // จำนวนวันที่โชว์ 1 - 7
                    $sc_timeStep=array("09:00","10:00","11:00","12:00","13:00","14:00","15:00","16:00","17:00","18:00","19:00","20:00","21:00","22:00");
                    $sc_numCol=14;
                    ////////////////////// ส่วนของการจัดการตารางเวลา /////////////////////
                    ?>
                    <br>
                    <div class="wrap_schedule">
                    <table  align="center" border="1" cellspacing="2" cellpadding="2"style="border-collapse:collapse;" >
                      <tr class="time_schedule">
                        <td align="center" valign="middle" height="50" bgcolor="#101010">
                        &nbsp;</td>
                    <?php
                    for($i_time=0;$i_time<$sc_numCol-1;$i_time++){
                    ?>
                        <td align="center" valign="middle" height="50" bgcolor="#101010">
                        <div class="time_schedule_text" >
                            <font color="#DCDCDC" size="3"><?=$sc_timeStep[$i_time]?> - <?=$sc_timeStep[$i_time+1]?></font>
                        </div>
                        </td>
                    <?php }?>
                      </tr>

                    <!-- // วนลูปแสดงจำนวนวันตามที่กำหนด -->
                    @for($i_day=0;$i_day<$num_dayShow;$i_day++)

                      <tr>
                        <td align="center" valign="middle" height="50" class="day_schedule" bgcolor="#101010">
                        <div class="day_schedule_text">
                            <font color="#DCDCDC" size="3"><?=$thai_day_arr[$i_day]?></font>
                            <br>

                        </div>
                        </td>
                    @for($i_time=0;$i_time<$sc_numCol-1;$i_time++)
                        @if(count($Table)!=0)
                            @foreach ($Table as $Tables)
                              <?php $check=true;?>
                              @if($Tables->roomID == $Room->roomID)
                                  @if($Tables->Day == $eng_day_arr[$i_day])
                                      @if($sc_timeStep[$i_time].':00' == $Tables->TableStart)
                                          <?php $num=0; ?>
                                          @while($check!=false)
                                              <?php $i_time++;$num++;?>
                                              @if($sc_timeStep[$i_time].':00' == $Tables->TableEnd)
                                                  <?php $css_use="class=\"activity\"";
                                                  $dataShowIN=$Tables->Name." - ".$Tables->Subject;
                                                  $colspan="colspan=\"".$num."\"";
                                                  $check=false;
                                                  ?>
                                                  <td <?=$css_use?> <?=$colspan?> align="center" valign="middle" height="50" bgcolor="#3399FF">

                                                      <form action="{{ url('/room/addtable/delete/'.$Tables->TableID.'') }}" method="post">
                                                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                               <input type="hidden" name="_method" value="DELETE">
                                                              <font color="#DCDCDC" size="3"><?=$dataShowIN?> <button class="btndanger" style="font-size: 10px"><i class="fa fa-close"></i></button> </font>
                                                      </form>
                                                  </td>
                                              @endif
                                          @endwhile
                                      @endif
                                  @endif
                                @endif
                            @endforeach
                        @endif
                        <?php $css_use="class=\"activity\""; ?>
                        <?php $dataShowIN="";
                        $colspan="colspan=\""."0"."\"";
                        ?>
                        <td <?=$css_use?> <?=$colspan?> align="center" valign="middle" height="50">
                            <?php  echo $dataShowIN;?>
                        </td>
                    @endfor
                      </tr>
                    @endfor
                    </table>
                </div>
                <!-- ////////////////////// ส่วนของตาราง //////////////// -->
          <br>
          <div class="hr"></div>
        </div>
      </div>
      <div class="container transition visible" id="form" style="display: block !important;">

        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                        <br>

                        <h2 class="ui left floated header">
                        <font id="formtext" size="6" color="#B92000">FORM</font><br> <font id="reservetext" size="5" color="#828282">RESERVATION</font>
                        </h2>
            <div class="ui clearing divider"></div>
                <div class="ui raised segment">
                  <br>
                  <form class="form-horizontal transition visible" action="{{ url('/room/addtable/add/'.$Room->roomID) }}" enctype="multipart/form-data" method="post" style="display: block !important;">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <font size="3">
                            <?php $check=true; ?>
                            <div class="form-group">
                                <label class="col-md-5 control-label">End Term<font color="red">**</font></label>
                                  @if(count($Datetable)!=0)
                                    @foreach ($Datetable as $Datetables)
                                      @if ($Datetables->roomID == $Room->roomID)
                                        <div class="col-md-3" style="display: inline"><input type="text" name="EndTerm" class="form-control" id="datetimepicker" value='<?php echo substr($Datetables->EndTerm, 8 ,2); ?>-<?php echo substr($Datetables->EndTerm, 5 ,2); ?>-
                                          <?php echo (int)substr($Datetables->EndTerm, 0 ,4); ?>' placeholder="วันที่" required=""></div>
                                        <?php $check=false;?>
                                        @break
                                    @endif
                                    @endforeach
                                  @endif
                                  @if($check==true)
                                    <div class="col-md-3" style="display: inline"><input type="text" name="EndTerm" class="form-control" id="datetimepicker" placeholder="วันที่" required=""></div>
                                  @endif
                            </div>

                          <div class="form-group">
                              <label class="col-md-5 control-label">Day<font color="red">**</font></label>
                              <div class="col-md-3">
                                <select name="Day">
                                  <option value="MO">จันทร์</option>
                                  <option value="TU">อังคาร</option>
                                  <option value="WE">พุธ</option>
                                  <option value="TH">พฤหัสบดี</option>
                                  <option value="FR">ศุกร์</option>
                                  <option value="SA">เสาร์</option>
                                  <option value="SU">อาทิตย์</option>
                                </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-md-5 control-label">Name<font color="red">**</font></label>

                              <div class="col-md-3">
                                    <input type="text" name="Name" class="form-control"  placeholder="ชื่อผู้สอน" required="">
                              </div>
                          </div>

                            <div class="form-group">
                                <label class="col-md-5 control-label">Subject<font color="red">**</font></label>

                                <div class="col-md-3">
                                      <input type="text" name="Subject" class="form-control"  placeholder="วิชา" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-5 control-label">Time Start<font color="red">**</font></label>

                                <div class="col-md-3">
                                      <input type="text" name="TableStart" class="form-control" id="datetimepicker2" placeholder="เวลาเริ่มต้น" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 control-label">Time End<font color="red">**</font></label>

                                <div class="col-md-3">
                                      <input type="text" name="TableEnd" class="form-control" id="datetimepicker3" placeholder="เวลาสิ้นสุด" required="">
                                </div>
                            </div>

                          </font>
                        <div class="form-group">
                                <div class="col-md-5 col-md-offset-5">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </div>
                  </form>
                  <br>
              </div>
            </div>
        </div>
    <br>


  <!-- Scripts -->
     <script src="{{ asset('/js/semantic.min.js') }}"></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <script type="text/javascript">
          var date = new Date();
  date.setHours(0,0,0,0);
        $(function () {
             $('#datetimepicker').datetimepicker({
                format: 'DD-MM-YYYY'
            });
        });
        $(function () {
             $('#datetimepicker2').datetimepicker({
                format: 'HH:00',
                useCurrent: 'day'
            });
        });
        $(function () {
             $('#datetimepicker3').datetimepicker({
                format: 'HH:00',
                useCurrent: 'day'
            });
        });
    </script>
</div>


</body>
</html>
