<!DOCTYPE html>
<html lang="en">
<head>
      <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="IN87t3UOfmDgWieqewM8bRJWhjc0eplU9Zv3mKhX">
    <link rel="shortcut icon" href="images/bs.png">
    

    
    <script src="http://libapp.src.ku.ac.th/dist/js/lightbox-plus-jquery.min.js"></script>
    <link rel="stylesheet" href= "http://libapp.src.ku.ac.th/dist/css/lightbox.min.css">
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
          .ui.teal.button{
        background-color:#F74443 !important;
        border-color:#F74443 !important;
        transition: 0.7s;
  }
  .ui.teal.button:hover{
      background-color:#F00B0B !important;
      border-color:#F00B0B !important;
  }
   
    </style>
    </head>
<body id ="bodycolor">
    <div id="loading">
    </div> 
    <div id="app">
        <audio id="audio" src="http://libapp.src.ku.ac.th/sound/noti.mp3" autostart="false" ></audio>
<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container" id ="bar">

                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                                          <a class="navbar-brand" href = "http://libapp.src.ku.ac.th/adminindex">
                          <font color ="white" size="3"><b><img width ="40" height ="27" src="http://libapp.src.ku.ac.th/seimg/admins.png">&nbsp;&nbsp;ADMIN PANEL</b></font>
                      </a>
                                    </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                                                    <li><a href="http://libapp.src.ku.ac.th"><i class="home icon"></i><b>Home</b></a></li>
                                                          <li class="dropdown" id ="dropdownz">
                                  <a href="#" class="dropdown-toggle" id ="notification" data-toggle="dropdown" role="button" aria-expanded="false">
                                      <i class="alarm icon"></i>&nbsp;<b>Notifications</b> <span class="badge danger" id="count">0</span>
                                  </a>

                                  <ul class="dropdown-menu scrollable-menu" role="menu" id ="showNotification">
                                                                                                                                                              <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Boonrawee Moonsin (5930105413)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดใหญ่ 1</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;25/11/2018 <font size="3">เวลา 12 : 00 - 14 : 00</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Thanatcha Sriwichai (0989044784)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดใหญ่ 1</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;25/11/2018 <font size="3">เวลา 09 : 00 - 11 : 00</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Kanokwan Ridking (5930107033)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษาเดี่ยว ห้องที่ 10</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;25/11/2018 <font size="3">เวลา 09 : 30 - 11 : 30</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Boonrawee Moonsin (5930105413)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดใหญ่ 1</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;25/11/2018 <font size="3">เวลา 09 : 00 - 11 : 00</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Poomipat Apicharueangrot (5830300788)</b></font> ได้จอง <font size="2.5"><b>ห้องมินิเธียเตอร์</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;25/11/2018 <font size="3">เวลา 11 : 00 - 12 : 00</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Sorrawit Khammuang (6030155954)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดเล็ก ชั้น 3</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;24/11/2018 <font size="3">เวลา 15 : 30 - 16 : 30</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Nitchakan Ruenglan (6130501005)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดเล็ก ชั้น 2</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;24/11/2018 <font size="3">เวลา 14 : 25 - 16 : 25</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Thipkesorn Aroonrua (6030150405)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดเล็ก ชั้น 3</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;24/11/2018 <font size="3">เวลา 13 : 50 - 15 : 00</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Nitchakan Ruenglan (6130501005)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดเล็ก ชั้น 2</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;24/11/2018 <font size="3">เวลา 14 : 15 - 15 : 10</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Woraphon Puttachaphinyo (5830560950)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดใหญ่ 1</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;24/11/2018 <font size="3">เวลา 14 : 00 - 16 : 00</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                                                                                      </ul>
                              </li>
                           
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="user icon"></i>
                                                                            <b>ผู้ดูแลระบบ</b>&nbsp;<span class="caret"></span>
                                                                    </a>    
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="http://libapp.src.ku.ac.th/user/manage/eyJpdiI6IlwvakxMUlhWSXRMR3EwMUJmY3lMOTFnPT0iLCJ2YWx1ZSI6IkdmKzQ5anNEMWZKTTFvbFhaMWhaN2c9PSIsIm1hYyI6IjMzMzQ5ZDFlZThmMGI1Yzg5NTFhNTI1MzVjNjdmNTY1ZGY2MTZkOWRjOTczNzBjZTI3NDllZDZhMGIwYmQ5NDQifQ==">
                                          <img width ="23" height ="22" src="http://libapp.src.ku.ac.th/seimg/setting2.png">&nbsp;&nbsp;Manage Account
                                        </a>
                                        <a href="http://libapp.src.ku.ac.th/logout"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <img width ="23" height ="23" src="http://libapp.src.ku.ac.th/seimg/logout.png">&nbsp;&nbsp;Logout
                                        </a>
                                        <form id="logout-form" action="http://libapp.src.ku.ac.th/logout" method="POST" style="display: none;">
                                            <input type="hidden" name="_token" value="IN87t3UOfmDgWieqewM8bRJWhjc0eplU9Zv3mKhX">
                                        </form>
                                    </li>
                                </ul>
                            </li>

                             
                                            </ul>
                </div>
            </div>
        </nav>
            <div class="container" id ="allmenu">
        <div class="row">
          <div class="col-md-12 col-md-offset-0">
          <br>
          <br>
          <br>
          <br>
                        <h2 class="ui left floated header"><font size = "6" color ="#B92000">MENU</font><br> <font size = "5" color ="#828282">FOR-ADMIN</font></h2>
              <div class="ui clearing divider"></div>
              <div class="ui grey four item stackable menu" id ="para3">
                  <a class="item" href="http://libapp.src.ku.ac.th/home">
                    <img src="http://libapp.src.ku.ac.th/seimg/books.png" style ="height:23px; width:23px"><font size="2">&nbsp;&nbsp;Rooms Panel</font></a>
                  </a>
                  <a class="item" href="http://libapp.src.ku.ac.th/new">
                    <img src="http://libapp.src.ku.ac.th/seimg/home.ico" style ="height:23px; width:23px"><font size="2">&nbsp;&nbsp;Index Panel</font>
                  </a>
                  <a class="item" href="http://libapp.src.ku.ac.th/user/show/staff">
                    <img src="http://libapp.src.ku.ac.th/seimg/user.png" style ="height:23px; width:24px"><font size="2">&nbsp;Staff Panel</font>
                  </a>
                  <a class="item" href="http://libapp.src.ku.ac.th/user">
                    <img src="http://libapp.src.ku.ac.th/seimg/admin.png" style ="height:23px; width:22px"><font size="2">&nbsp;&nbsp;User Panel</font>
                  </a>
              </div>
                           
          <br>
          <br>
          <h2 class="ui left floated header">

          <font size = "6" color ="#B92000">WORK</font><br> <font size = "4" color ="#828282">TODAY </font><font size = "4" color ="#828282">(25/11/18)</font>
          </h2>
          <br>
            <a href="http://libapp.src.ku.ac.th/reservationsearchonadmin" class ="pull-right">
                <span><button class="ui teal button" ><i class="search icon"></i><font size="2">Active Search&nbsp;</font></button></span></a>
            </a>
          
          <div class="ui clearing divider"></div>
          </font>     
                    <div class="table-responsive table-inverse" id="table">
            <table class="table table-bordered" id ="border">
            <tr>
            <thead>
                   <th class="bg-primary">Student ID</th>
                   <th class="bg-primary">Firstname</th>
                   <th class="bg-primary">Lastname</th>
                   <th class="bg-primary">Room</th>
                   <th class="bg-primary">Time Start</th>
                   <th class="bg-primary">Time End</th>
            </tr>
            </thead>                 
               <tbody id = "tableupdate">
          <tr>
              <td id = "tablecolor"><font size ="3">0989044784</font></td>
              <td id = "tablecolor"><font size ="3">Thanatcha</font></td>
              <td id = "tablecolor"><font size ="3">Sriwichai</font></td>
              <td id = "tablecolor"><font size ="3">ห้องศึกษากลุ่มขนาดใหญ่ 1</font></td>
              <td id = "tablecolor"><font size ="3">09 : 00</font></font></td>
              <td id = "tablecolor"><font size ="3">11 : 00</font></td>

          </tr>
        </tbody>
                <tbody id = "tableupdate">
          <tr>
              <td id = "tablecolor"><font size ="3">5930107033</font></td>
              <td id = "tablecolor"><font size ="3">Kanokwan</font></td>
              <td id = "tablecolor"><font size ="3">Ridking</font></td>
              <td id = "tablecolor"><font size ="3">ห้องศึกษาเดี่ยว ห้องที่ 10</font></td>
              <td id = "tablecolor"><font size ="3">09 : 30</font></font></td>
              <td id = "tablecolor"><font size ="3">11 : 30</font></td>

          </tr>
        </tbody>
                <tbody id = "tableupdate">
          <tr>
              <td id = "tablecolor"><font size ="3">5930105413</font></td>
              <td id = "tablecolor"><font size ="3">Boonrawee</font></td>
              <td id = "tablecolor"><font size ="3">Moonsin</font></td>
              <td id = "tablecolor"><font size ="3">ห้องศึกษากลุ่มขนาดใหญ่ 1</font></td>
              <td id = "tablecolor"><font size ="3">12 : 00</font></font></td>
              <td id = "tablecolor"><font size ="3">14 : 00</font></td>

          </tr>
        </tbody>
          </table>


    
          </div>        
          <br>
          <br>
        </div>
    </div>
    </div> 
    <br>
    <center>
    <div class="navbar-fixed-bottom" id="para2">
        <i class="wizard icon"></i>
        <font size ="2"> Powered by CPE-KUSRC © 2017</font>         
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
            function loadtb() {
      $('#table').load("http://libapp.src.ku.ac.th/loadtable");
    }
    loadtb();
    setInterval(loadtb, 6000);
        $(document).ready( function() {
            $('#allmenu').transition('scale');
            $('#table')
              .transition({
                animation  : 'fade down in',
                duration   : '0.4s',
              })
            ;
            $('#form')
              .transition({
                animation  : 'fly up',
                duration   : '1s',
              })
            ;
            $('#bar')
              .transition({
                animation  : 'scale',
                duration   : '0.6s',
              })
            ;

         });
        function playSound() {
          var sound = document.getElementById("audio");
          sound.play();
        }
        $(".navbar-fixed-bottom").fadeToggle();

                
    </script>
    <script src="/StreamLab/StreamLab.js"></script>
    <script>
        var message, ShowDiv = $('#showNotification'), count = $('#count'), c ,run = 0;
        var slh = new StreamLabHtml();
        var sls = new StreamLabSocket({
            appId:"ae5b0a67-0d2c-45b0-8d7a-d0fa79ccbbca",
            channelName:"test",
            event:"*"
        });     
        sls.socket.onmessage = function(res){
            slh.setData(res);
            if(slh.getSource() == 'messages'){
                c = parseInt(count.html());
                run = 1;
                count.html(c+1);
                message = slh.getMessage();
                ShowDiv.prepend('<li><a href="http://libapp.src.ku.ac.th/reservationsearch"  class ="unread"><img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;'+message+'</a></li>');
                    $('#table').load("http://libapp.src.ku.ac.th/loadtable");
    $('#table').transition('vertical flip out');
    $('#table').transition('vertical flip in');
            }
            if(run==1){
                $('#notification').each(function(){
                    $(this).hide();
                    $(this).transition('jiggle')
                    playSound();
                });
                run = 0;
            }
        }
        $('#notification').on('click', function(){
            $.get('/MarkAllSeen/', function(){});
            count.html(0);
        });
    </script>


    
    
</body>
</html>
