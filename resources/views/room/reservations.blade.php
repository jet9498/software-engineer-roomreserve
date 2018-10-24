<!DOCTYPE html>
<html lang="en"><head>
    <title>Library Reservation</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="fywJr6ESbLn45aWpdvnqauw20dLdrlehT1L7Cz6I">
    <link rel="shortcut icon" href="images/bs.png">



    <script src="http://libapp.src.ku.ac.th/dist/js/lightbox-plus-jquery.min.js"></script>
    <link rel="stylesheet" href="http://libapp.src.ku.ac.th/dist/css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="http://libapp.src.ku.ac.th/semantic/semantic.min.css">
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

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
    <div id="app">
        <div class="container transition visible" id="allmenu" style="display: block !important;">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
          <br>
          <br>
          <br>
          <br>
          <h2 class="ui left floated header"><font id="statustext" size="6" color="#B92000">ROOM 310</font><br></h2>
                      <a href="http://libapp.src.ku.ac.th/home">

            </a>
              <div class="ui clearing divider"></div>
            </div>
                <br>
                <div class="table-responsive table-inverse transition visible" id="table" style="display: block !important;">
                    <table class="table table-bordered" id="border">
                      <tbody><tr>
                      </tr></tbody><thead>
                        <tr><th class="bg-primary">Date</th>
                        <th class="bg-primary">Use Time</th>
                        <th class="bg-primary">Status</th>
                      </tr>
                      </thead>
                                               <tbody>
                            <tr>
                                 <td id="tablecolor"><font size="3">24/10/2018  </font></td>
                                 <td id="tablecolor"><font size="3">16 : 30 - 18 : 30</font></td>
                                 <td id="tablecolor">
                                                                          <img width="12" height="12" src="http://libapp.src.ku.ac.th/seimg/circlewaiting.png">&nbsp;<font size="3" color="red">รอใช้งาน</font>
                                                                     </td>

                            </tr>
                          </tbody>
                                         </table>
                  </div>
                  <span class="pull-right"> </span>

                                  <font color="#5B5B5B" id="phonetext"><b>Tips : </b>สามารถเลื่อนตาราง ซ้าย-ขวา ได้ </font>
                          </div>
        </div>
      </div>
      <div class="container transition visible" id="form" style="display: block !important;">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                        <br>
                        <br>
                        <h2 class="ui left floated header">
                        <font id="formtext" size="6" color="#B92000">FORM</font><br> <font id="reservetext" size="5" color="#828282">RESERVATION</font>
                        </h2>
                                            <div class="ui clearing divider"></div>
                      <div class="ui raised segment">
                        <br>
                        <font size="3">
                                                                                                      </font>
                        <div id="textrule" style="display: none;">
                            <center><h2><i style="font-size:0.8em;" class="warning circle icon"></i><font id="finishReserve">ข้อปฏิบัติเมื่อจองห้องเสร็จแล้ว</font></h2></center>
                            <font size="3">
                              <br>
                              <ul id="ruletextall">
                                <li>ท่านต้องมายืนยันการใช้งานด้วยตนเอง</li>
                                <li>ยืนยันกับเจ้าหน้าที่ประจำเคาน์เตอร์ให้บริการ โดยใช้บัตรนิสิต</li>
                                <li>มีเวลายืนยัน 15 นาทีหลังเวลาจองเริ่มต้น</li>
                                <li>หากไม่ได้ยืนยัน จะถูกยกเลิกสิทธิ์อัตโนมัติ</li>
                              </ul>
                            </font>
                            <center>
                            <button class="btn btn-primary" id="jong"><font size="2"><i class="sign in icon"></i>จองห้อง</font></button></center>
                        </div>
                        <form class="form-horizontal transition visible" action="http://libapp.src.ku.ac.th/reservation/add/8" enctype="multipart/form-data" method="post" onsubmit="return confirm('ก่อนดำเนินการใดๆ ควรอ่านกฏการจองห้องในหน้าแรกก่อน คุณพร้อมแล้วใช่ไหม?')" id="reservationform" style="display: block !important;">
                            <input type="hidden" name="_token" value="fywJr6ESbLn45aWpdvnqauw20dLdrlehT1L7Cz6I">
                            <input type="hidden" name="_method" value="PUT">
                                <font size="3">
                                  <div class="form-group" id="studentForm">
                                                                                  <input type="hidden" id="studentID" name="StudentID" value="5830301032" class="form-control">

                                                                        </div>
                                  <div class="form-group">
                                      <label class="col-md-5 control-label">Date<font color="red">**</font></label>

                                      <div class="col-md-3">
                                            <input type="t3ext" name="date" class="form-control" id="datetimepicker1" placeholder="วันที่" required="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-md-5 control-label">Time Start<font color="red">**</font></label>

                                      <div class="col-md-3">
                                            <input type="text" name="timestart" class="form-control" id="datetimepicker2" placeholder="เวลาเริ่มต้น" required="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-md-5 control-label">Time End<font color="red">**</font></label>

                                      <div class="col-md-3">
                                            <input type="text" name="timeend" class="form-control" id="datetimepicker3" placeholder="เวลาสิ้นสุด" required="">
                                      </div>
                                  </div>

                                </font>
                              <div class="form-group">
                                      <div class="col-md-5 col-md-offset-5">
                                          <button type="submit" class="btn btn-primary">
                                          <i class="write icon"></i>Submit</button>
                                      </div>
                              </div>
                        </form>
                        <br>
                    </div>
                    <br>
                    <br>
          </div>
      </div>
    </div>
    <br>
    <center>
    <div class="navbar-fixed-bottom" id="para2" style="display: block;">
        <i class="wizard icon"></i>
        <font size="2"> Powered by CPE-KUSRC © 2017</font>
    </div>
    </center>

</div>


</body>
</html>
