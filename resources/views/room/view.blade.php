<!DOCTYPE html>
<html lang="en"><head>
    <title>Reservation</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="CG07Q6CxQFBmUXetWruibRxDBe6jXXQ4ZM67Mg6J">



    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/styleHome.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styleReservations.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/stylesemantic.css') }}">
     <link rel="stylesheet" href="{{ asset('/css/styleapp.css') }}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="{{ asset('/js/styleapp.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

  <link rel="stylesheet" href="{{ asset('/css/Datetimepicker.css') }}">

  <script src="{{ asset('/js/datetimepicker.min.js') }}"></script>


    </head>
<body id="bodycolor" onload="startTime()">


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


          <li style="border-bottom:2px solid red;"><a href="/">หน้าหลัก</a></li>





          <li><a href="#" data-toggle="modal" data-target="#fam">ข้อปฏิบัติ</a></li>
          <li><a href="#"data-toggle="modal" data-target="#contact">ติดต่อเรา</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">


          @if (Auth::guest())


            <li><a href="#"data-toggle="modal" data-target="#id01"><span class="glyphicon glyphicon-log-in" ></span> เข้าสู่ระบบ</a></li>



        </ul>
      </li>
        </ul>


        @else


            <li class="dropdown"><a data-toggle="dropdown" href="#"><img width="23" height="22" src="{{ asset('/img/demo/profile.png') }}"> {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
            @if(Auth::guest() || Auth::user()->status != 1)
            <li href="{{ url('/usercreate') }}"><a href="{{ url('/usercreate') }}" ><img width="23" height="22" src="{{ asset('/img/demo/fixing.png') }}"> จัดการโปรไฟล์</a></li>

            <li><a href="{{ url('/logout') }}" ><img width="23" height="22" src="{{ asset('/img/demo/logout.png') }}"> ออกจากระบบ</a></li>
            @else
            <li><a href="section4" ><img width="23" height="22" src="{{ asset('/img/demo/fixing.png') }}">  จัดการโปรไฟล์</a></li>
            <li><a href="{{ url('/logout') }}" ><img width="23" height="22" src="{{ asset('/img/demo/logout.png') }}"> ออกจากระบบ</a></li>
            @endif
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
          <span>1) ในการจองห้องจะต้องจอง 1 ชั่วโมงขึ้นไป</span>
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
          <span>อีเมลล์ : Niwes@eng.src.ku.ac.th</span>
          <br>
          <span>โทรศัพท์ : 038-354-581-4 #2822</span>

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

  <div class="modal fade " id="id01" role="dialog" style="z-index: 9999">
    <!--ล็อคอินของ laravel user-->
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    @if(Session::has('flash_message'))
                      <div class="alert alert-danger"><em> <center><li>{!! session('flash_message') !!}</li></center></em></div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <!-- เงื่อนไขเวลา จะเข้าหน้า Admin -->

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>








    <div id="loading">
    </div>
    <div id="app">


        <div class="container transition visible" id="allmenu" style="display: block !important;">
    <div class="row">
        <div class="col-md-12 col-md-offset-0" style="width:1250px;">
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
                    <div class="ui clearing divider"></div>
                     <br>
                       @foreach ($Datetable as $Datetables)
                          @if ($Datetables->roomID == $Room->roomID)
                            <font color="red">*</font><font>วันสิ้นสุดของเทอมนี้ : <?php echo substr($Datetables->EndTerm, 8 ,2); ?>-<?php echo substr($Datetables->EndTerm, 5 ,2); ?>-<?php echo (int)substr($Datetables->EndTerm, 0 ,4)+543; ?></font>
                            @break
                        @endif
                        @endforeach
                      <br>

                    <!-- ////////////////////// ส่วนของตาราง //////////////// -->
                    <?php
                    // ส่วนของตัวแปรสำหรับกำหนด
                    $thai_day_arr=array("จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์","อาทิตย์");
                    $eng_day_arr=array("MO","TU","WE","TH","FR","SA","SU");
                    ////////////////////// ส่วนของการจัดการตารางเวลา /////////////////////
                    $num_dayShow=7;  // จำนวนวันที่โชว์ 1 - 7
                    $sc_timeStep=array("09:00","09:30","10:00","10:30","11:00","11:30","12:00","12:30","13:00","13:30","14:00","14:30","15:00","15:30"
                                      ,"16:00","16:30","17:00","17:30","18:00","18:30","19:00","19:30","20:00","20:30","21:00","21:30","22:00");
                    $sc_numCol=27;
                    ////////////////////// ส่วนของการจัดการตารางเวลา /////////////////////
                    ?>
                    <br>
                    <div class="wrap_schedule" style="overflow-x:auto;">
                    <table  align="center" border="1" cellspacing="2" cellpadding="2"style="border-collapse:collapse;" >
                      <tr class="time_schedule">
                        <td align="center" valign="middle" height="50" bgcolor="#101010">
                        &nbsp;</td>

                    @for($i_time=0;$i_time<$sc_numCol-1;$i_time++)

                        <td align="center" valign="middle" height="50" bgcolor="#101010">
                        <div class="time_schedule_text" >
                            <font color="#DCDCDC" size="3"><?=$sc_timeStep[$i_time]?> - <?=$sc_timeStep[$i_time+1]?></font>
                        </div>
                        </td>
                    @endfor
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
                                                                <font color="#DCDCDC" size="3"><?=$dataShowIN?> </font>
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
                    </table>
                </div>
                <!-- ////////////////////// ส่วนของตาราง //////////////// -->
          <br>
                <font color="red">*</font><font>สีฟ้าคือเวลาที่ไม่สามารถจองได้</font><font color="red">*</font>
          <br>
          <br>

          <div class="table-responsive table-inverse transition visible" id="table" style="display: block !important;">
              <table class="table table-bordered" id="border">
                <tbody><tr>
                </tr></tbody><thead>
                  <tr><th class="bg-primary">Date</th>
                  <th class="bg-primary">Use Time</th>
                  <th class="bg-primary">Status</th>
                  <th class="bg-primary">Name</th>
                </tr>
                </thead>
                <?php $i=0 ?>

          @foreach($Rsroom as $Rsrooms)
          @if($Room->roomID == $Rsrooms->roomID)
                  <tbody >

                  <tr>
                   <td class="bg-warning"><font size="3"><?php echo substr($Rsrooms->RsStart, 8 ,2); ?>-<?php echo substr($Rsrooms->RsStart, 5 ,2); ?>-<?php echo (int)substr($Rsrooms->RsStart, 0 ,4)+543; ?></font></td>
                   <td class="bg-warning"><font size="3"><?php echo substr($Rsrooms->RsStart, 11 ,9); ?> - <?php echo substr($Rsrooms->RsEnd, 11 ,9); ?></font></td>
                   <td class="bg-warning">

                    @if($status[$i] == "รอใช้งาน")
                          <img width="12" height="12" src="{{ asset('/img/demo/circlewaiting.png') }}">&nbsp;<font size="3" color="red">{{$status[$i]}}</font>
                    @else
                          <img width="12" height="12" src="{{ asset('/img/demo/circleready.png') }}">&nbsp;<font size="3" color="red">{{$status[$i]}}</font>
                    @endif

                    </td>
                    @foreach($user as $users)
                      @if($users->id == $Rsrooms->userID)
                        <td class="bg-warning"><font size="3">{{$users->name}}</font></td>
                        @break
                      @endif
                    @endforeach
                  </tr>
                  </tbody>
          @endif
            <?php $i++ ?>
          @endforeach


             </table>
         </div>
         <br>
         <br>
         <br>
        </div>
      </div>



</div>


</body>
</html>
