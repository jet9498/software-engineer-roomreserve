<!DOCTYPE html>
<html lang="en"><head>
    <title>Reservation</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="CG07Q6CxQFBmUXetWruibRxDBe6jXXQ4ZM67Mg6J">
    <link rel="shortcut icon" href="images/bs.png">

    <link rel="stylesheet" type="text/css" href="http://libapp.src.ku.ac.th/semantic/semantic.min.css">
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/styleHome.css') }}">
    <link href="http://libapp.src.ku.ac.th/css/app.css" rel="stylesheet">
    <script src="http://libapp.src.ku.ac.th/js/app.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

  <link href="http://libapp.src.ku.ac.th/datetime/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

  <script src="http://libapp.src.ku.ac.th/datetime/build/js/bootstrap-datetimepicker.min.js"></script>

  <style type="text/css">
        @import  url('https://fonts.googleapis.com/css?family=Kanit');

        html *{
            font-family: 'Kanit', sans-serif;
        }
        .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover{
            background-color:#575757 !important;
        }
        #myBtn {
            display: none; /* Hidden by default */
            position: fixed; /* Fixed/sticky position */
            bottom: 20px; /* Place the button at the bottom of the page */
            right: 30px; /* Place the button 30px from the right */
            z-index: 99; /* Make sure it does not overlap */
            border: none; /* Remove borders */
            outline: none; /* Remove outline */
            background-color: #575757 !important; /* Set a background color */
            color: white; /* Text color */
            cursor: pointer; /* Add a mouse pointer on hover */
            padding: 15px; /* Some padding */
            border-radius: 10px; /* Rounded corners */
        }

        .icon-bar{
            background-color:white !important;
        }

        #myBtn:hover {
            background-color: #575757 !important; /* Add a dark-grey background on hover */

        }
        body{
            background-color:#EEF3F7 !important;
        }
        #finishReserve{
            font-size:0.8em;
        }
        #howtomodal{
           position: relative;
           overflow-y: scroll !important;
        }
        #rulemodal{
           position: relative;
           overflow-y: scroll !important;
        }
        #textrule{ display:table; margin:0 auto;}
        #texthowto{ display:table; margin:0 auto;}
        #userlogin{ display:table; margin:0 auto;}
        .unread{
              background-color:#EDF2FA;
        }
        .scrollable-menu {
            height: auto;
            width: auto;
            max-width: 500px;
            max-height: 370px;
            overflow-x: hidden;
        }
        .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
            color: #C9C9C9;  /*Sets the text hover color on navbar*/
        }
        #phonetext{
            display:none;
        }
        #textexam{
            font-size:1em;
        }
        @media(max-width:768px){
            .navbar.navbar-default .navbar-nav .open .dropdown-menu > li > a {
                color: #FFF;
            }
            #howtomodal{
               position: relative;
            }
            #rulemodal{
               position: relative;
            }
            .unread{
              background-color:#9B1C00;
            }
            #phonetext{
                display:block;
            }
            #finishReserve{
                font-size:0.6em;
            }
            #toggletext{
                font-size:0.95em;
            }
            #textadmin{
                font-size:0.8em;
            }
            #textnisit{
                font-size:0.8em;
            }
            #textexam{
                font-size:0.9em;
            }
        }
        @media(max-width:340px){
            .navbar.navbar-default .navbar-nav .open .dropdown-menu > li > a {
                color: #FFF;
            }
            #howtomodal{
               position: relative;
            }
            #rulemodal{
               position: relative;
            }
            .unread{
              background-color:#9B1C00;
            }
            #phonetext{
                display:block;
            }
            #finishReserve{
                font-size:0.6em;
            }
            #toggletext{
                font-size:0.95em;
            }
            #textadmin{
                font-size:0.8em;
            }
            #textnisit{
                font-size:0.9em;
            }
            #textexam{
                font-size:0.9em;
            }
        }
        .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active >
             a:hover, .navbar-default .navbar-nav > .active > a:focus {
            color: white; /*BACKGROUND color for active*/
            background-color: #030033;
        }

          .navbar-default {
            background-color: #575757;
            border:0;
            box-shadow: 0 4px 6px 0 rgba(0,0,0,0.2);
        }

        .dropdown-menu > li > a:hover,
        .dropdown-menu > li > a:focus {
            color: #262626;
           text-decoration: none;
           background-color: #66CCFF;  /*change color of links in drop down here*/
        }
        .nav > li > a:hover,
        .nav > li > a:focus {
            text-decoration: none;
            background-color: silver; /*Change rollover cell color here*/
        }
        .navbar-default .navbar-nav > li > a {
            color: white; /*Change active text color here*/
        }
        #allmenu{
            display: none;
        }
        #table{
            display: none;
        }
        #form{
            display: none;
        }
        #hideform{
            display: none;
        }
        #closeform{
            display: none;
        }
        .navbar-fixed-bottom{
            display: none;
        }
        #buttoncoloroff{
            background-color: #FA3E3E;
        }
        #buttoncoloron{
            background-color: #2AB27B;
        }
        #bar{
            display: none;
        }
        .danger{
          background-color: #FA3E3E;
        }
        .table-responsive{
            overflow-x: auto;
           -webkit-overflow-scrolling: touch;
       }
       #ssss{
            margin-left: 5px;
            margin-right: 5px;
       }
       .user-row {
            margin-bottom: 14px;
        }

        .user-row:last-child {
            margin-bottom: 0;
        }

        .dropdown-user {
            margin: 13px 0;
            padding: 5px;
            height: 100%;
        }

        .dropdown-user:hover {
            cursor: pointer;
        }

        .table-user-information > tbody > tr {
            border-top: 1px solid rgb(221, 221, 221);
            border-color: #8ECDEE;
        }

        .table-user-information > tbody > tr:first-child {
            border-top: 0;
        }


        .table-user-information > tbody > tr > td {
            border-top: 0;
        }
        .toppad
        {margin-top:20px;
        }
        #userbody{
            background-color: #ECF0F1;
        }
        #userfooter{
            background-color: #282828;
            height:50px;
        }
          @media(max-width:767px){
        #statustext{
          font-size:25px !important;
        }
        #roomnametext{
          font-size:18px !important;
        }
        #backtext{
          font-size:14px !important;
        }
        #formtext{
          font-size:25px !important;
        }
        #reservetext{
          font-size:20px !important;
        }
        #ruletextall{
          font-size:14px !important;
        }
    }

    </style>
    </head>
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


          <li style="border-bottom:2px solid red;"><a href="/">หน้าหลัก</a></li>





          <li><a href="#" data-toggle="modal" data-target="#fam">ข้อปฏิบัติ</a></li>
          <li><a href="#"data-toggle="modal" data-target="#contact">ติดต่อเรา</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in" ></span> เข้าสู่ระบบ</a></li>

        @else
            <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-in" ></span> ออกจากระบบ</a></li>
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
          <h2 class="ui left floated header"style="width:100%"><font id="statustext" size="6" color="#B92000">STATUS</font><br>
            <font id="roomnametext" size="5" color="#828282">{{$Room->roomName}}</font>
            <div class="hr"></div>
          </h2>

          <form class="form-horizontal transition visible" action="{{ url('/room/addtable/add/'.$Room->roomID) }}" enctype="multipart/form-data" method="post" style="display: block !important;">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                    <?php
                    // วนลูปแสดงจำนวนวันตามที่กำหนด
                    for($i_day=0;$i_day<$num_dayShow;$i_day++){
                    ?>
                      <tr>
                        <td align="center" valign="middle" height="50" class="day_schedule" bgcolor="#101010">
                        <div class="day_schedule_text">
                            <font color="#DCDCDC" size="3"><?=$thai_day_arr[$i_day]?></font>
                            <br>

                        </div>
                        </td>
                    <?php for($i_time=0;$i_time<$sc_numCol-1;$i_time++){sleep(0.1);?>
                      <?php $check=false ?>
                      <?php foreach ($Table as $Tables): sleep(0.1);?>
                        <?php if ($Tables->roomID == $Room->roomID && $Tables->Day == $eng_day_arr[$i_day] && $Tables->TableStart == "$sc_timeStep[$i_time]:00"): ?>
                          <td align="center"  height="50" bgcolor="#ff6700">
                            <input type="checkbox" name="Day[]" value="<?=$eng_day_arr[$i_day]?>" checked><?php sleep(0.1);?>
                            <input type="hidden" name="Day[]" value="<?=$sc_timeStep[$i_time]?>:00"><?php sleep(0.1);?>
                            <input type="hidden" name="Day[]" value="<?=$sc_timeStep[$i_time+1]?>:00"><?php sleep(0.1);?>
                          </td>
                          <?php $check=true; break;?>
                        <?php endif; ?>
                      <?php endforeach; ?>
                      <?php if (!$check): ?>
                        <td align="center"  height="50">
                          <input type="checkbox" name="Day[]" value="<?=$eng_day_arr[$i_day]?>"><?php sleep(0.1);?>
                          <input type="hidden" name="Day[]" value="<?=$sc_timeStep[$i_time]?>:00"><?php sleep(0.1);?>
                          <input type="hidden" name="Day[]" value="<?=$sc_timeStep[$i_time+1]?>:00"><?php sleep(0.1);?>
                        </td>
                      <?php endif; ?>
                    <?php  }?>
                      </tr>
                    <?php }?>
                    </table>
                </div>
                <!-- ////////////////////// ส่วนของตาราง //////////////// -->
          <br>
          <br>

                <div class="form-group">
                        <div class="col-md-5 col-md-offset-5">
                            <button type="submit" name="submit" class="btn btn-primary">
                            <i class="write icon"></i>Submit</button>
                        </div>
                </div>
          </form>
            </div>
        </div>
    <br>
    <center>
    <div class="navbar-fixed-bottom" id="para2" style="display: block;">
        <i class="wizard icon"></i>
        <font size="2"> Powered by CPE-KUSRC © 2018</font>
    </div>
    </center>
    <!-- Scripts -->
    <script src="http://libapp.src.ku.ac.th/semantic/semantic.min.js"></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

  <script type="text/javascript">
          var date = new Date();
  date.setHours(0,0,0,0);
  $(function () {
             $('#datetimepicker1').datetimepicker({
                format: 'DD-MM-YYYY'
            });
        });
        $(function () {
             $('#datetimepicker2').datetimepicker({
                format: 'HH:mm',
                useCurrent: 'day'
            });
        });
        $(function () {
             $('#datetimepicker3').datetimepicker({
                format: 'HH:mm',
                useCurrent: 'day'
            });
        });
    </script>


</div>


</body>
</html>
