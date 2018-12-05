<!DOCTYPE html>
<html lang="en">
<head>
    <title>Account Management</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="8yekQgPZFocMmiX5QZbLF4HjbEJSg1FG3GJuOQlq">
    <link rel="shortcut icon" href="images/bs.png">
    
     <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/styleHome.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styleReservation.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/stylesemantic.css') }}">
     <link rel="stylesheet" href="{{ asset('/css/styleapp.css') }}">

    <script src="{{ asset('/js/styleapp.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

  <link rel="stylesheet" href="{{ asset('/css/Datetimepicker.css') }}">

  <script src="{{ asset('/js/datetimepicker.min.js') }}"></script>
  
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
        #maintext{
          font-size:22x !important;
        }
        #menutext{
          font-size:24px !important;
        }
        #backtext{
          font-size:16px !important;
        }
        #statustext{
          font-size:22px !important;
        }
        #profiletext{
          font-size:24px !important;
        }
    }
   
    </style>
    </head>
<body id ="bodycolor">
    <div id="loading">
    </div> 
    <div id="app">
        
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
                                          <a class="navbar-brand" href = "http://libapp.src.ku.ac.th/user/manage/1">
                          <font color ="white" size="3"><b><img width ="40" height ="27" src="http://libapp.src.ku.ac.th/seimg/11.png">&nbsp;&nbsp;MY ACCOUNT</b></font>
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
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Nichada Thongmaim (6130203314)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดเล็ก ชั้น 4</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;06/12/2018 <font size="3">เวลา 16 : 00 - 18 : 00</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Athicha Leemataweekul (6030154745)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดเล็ก ชั้น 4</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;06/12/2018 <font size="3">เวลา 12 : 00 - 14 : 00</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Chalitta Nuchaiplod (6130166753)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดเล็ก ชั้น 4</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;06/12/2018 <font size="3">เวลา 14 : 00 - 16 : 00</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Chompunut Rattanavichai (6130166745)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดเล็ก ชั้น 3</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;06/12/2018 <font size="3">เวลา 11 : 00 - 13 : 00</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Atitaya Khantharuk (6030158694)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดเล็ก ชั้น 2</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;06/12/2018 <font size="3">เวลา 17 : 00 - 19 : 00</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Rujira Munkong (6030158333)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดเล็ก ชั้น 2</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;06/12/2018 <font size="3">เวลา 15 : 00 - 17 : 00</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Rinlarnee Srisoongnoen (6130304846)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดใหญ่ 2</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;04/12/2018 <font size="3">เวลา 17 : 15 - 19 : 15</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Thanakorn Wongtunhin (5830500825)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษาเดี่ยว ห้องที่ 3</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;04/12/2018 <font size="3">เวลา 16 : 00 - 18 : 00</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Sompratthana Sopa (6130160640)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดเล็ก ชั้น 3</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;04/12/2018 <font size="3">เวลา 18 : 00 - 19 : 30</font>
                                                </a>
                                            </li>
                                            
                                                                                                                                <li>
                                                                                                <a href="http://libapp.src.ku.ac.th/reservationsearch" class ="">
                                                    <img width ="10" height ="10" src="http://libapp.src.ku.ac.th/seimg/jood.png">&nbsp;<font size="2.5"><b>Jiranuwat Prayat (6130160046)</b></font> ได้จอง <font size="2.5"><b>ห้องศึกษากลุ่มขนาดเล็ก ชั้น 3</b></font> <br>&nbsp;&nbsp;&nbsp;&nbsp;04/12/2018 <font size="3">เวลา 16 : 00 - 18 : 00</font>
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
                                        <a href="http://libapp.src.ku.ac.th/user/manage/eyJpdiI6IlZQeGZCWEV6N1NySHVmU2pBOWFzV3c9PSIsInZhbHVlIjoiMmJLMFNNdEp2MUcwV1BrM2QzaE9DUT09IiwibWFjIjoiNmY0ZDE1NGJkNjVlZWUzYjdiNTI5NjMwMWM2MmMxZDNjYWFmZGEwZjIwN2MwNDVjZjcyYTVkOWU0MGM0MTZjYiJ9">
                                          <img width ="23" height ="22" src="http://libapp.src.ku.ac.th/seimg/setting2.png">&nbsp;&nbsp;Manage Account
                                        </a>
                                        <a href="http://libapp.src.ku.ac.th/logout"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <img width ="23" height ="23" src="http://libapp.src.ku.ac.th/seimg/logout.png">&nbsp;&nbsp;Logout
                                        </a>
                                        <form id="logout-form" action="http://libapp.src.ku.ac.th/logout" method="POST" style="display: none;">
                                            <input type="hidden" name="_token" value="8yekQgPZFocMmiX5QZbLF4HjbEJSg1FG3GJuOQlq">
                                        </form>
                                    </li>
                                </ul>
                            </li>

                             
                                            </ul>
                </div>
            </div>
        </nav>
        <div class="container" id="allmenu">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <br>
            <br>
            <br>
            <br>
                          <h2 class="ui left floated header"><font id="maintext" size = "5" color ="#828282">MAIN</font><br> <font id="menutext"size = "6" color ="#B92000">MENU</font></h2>
              <a href ="http://libapp.src.ku.ac.th/userlogin">
                <h2 class="ui right floated header"><br><font id="backtext" size = "4" color ="#5B5B5B">BACK<i class="reply icon"></i></font></h2>
              </a>
              <div class="ui clearing divider"></div>
                
                                <div class="ui grey two item stackable menu" id ="menu">    
                    <a class="item" href ="http://libapp.src.ku.ac.th/user/manage/password/eyJpdiI6Ikk1VjdFTnB6SHBPNmtTWThrcGtMYnc9PSIsInZhbHVlIjoiZmprTVliU2g0YVwvR0ZoYkxzRDNTc1E9PSIsIm1hYyI6IjNjZWNiZjkzOTMwM2YzMzdjZmIwMjQ4MmNlZjk1ZmJiNDNkYjZmMGNiM2YzNjFmNzNjMjA4NzU3MGNjOTUyZmQifQ==">
                        <img src="http://libapp.src.ku.ac.th/seimg/keyblue.png"><font size="2">&nbsp;Change Password</font></a>
                    </a>
                    <a class="item" href ="http://libapp.src.ku.ac.th/user/manage/infomation/eyJpdiI6InFmVVZFUmQwYW9NZG95YkpYVmJseGc9PSIsInZhbHVlIjoialZjcnNHTkZYK2crR2xDQUxnQU0rZz09IiwibWFjIjoiN2JiN2M0NDA2YWZkZmQzYTdmMmNiNGRkZmVlOTY4NjUxNmIwZTNjNjJlOTliYjVkOGEzNTliMjA3ZjZlM2Y5OSJ9">
                        <img src="http://libapp.src.ku.ac.th/seimg/1111.png"><font size="2">&nbsp;Profile Edit</font></a>
                    </a>      
                </div>    
                     
                            
                        <br>
            <br>
                          <h2 id="statustext" class="ui left floated header"><font size = "5" color ="#828282">YOUR</font><br> <font id="profiletext" size = "6" color ="#B92000">PROFILE</font></h2>
            
                        <div class="ui clearing divider"></div>
            <div class="ui piled segment">
              <br>
              <br>
              <br>
              <div class="row">
                <br>
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://libapp.src.ku.ac.th/seimg/user.png" class="img-circle img-responsive"> </div>
                <br>
                <div class=" col-md-9 col-lg-9 "> 
                  <font size ="3">                
                                        <div class="table-responsive table-inverse" id="table">
                                          <table class="table table-user-information">
                      <tbody>
                        <tr>
                          <td><b>Admin ID </b></td>
                          <td>admin</td>
                        </tr>
                        <tr>
                          <td><b>Firstname </b></td>
                          <td>Library</td>
                        </tr>
                        <tr>
                          <td><b>Lastname </b></td>
                          <td>Sriracha</td>
                        </tr>
                        <tr>
                          <td><b>Email </b></td>
                          <td>library@src.ku.ac.th</td>
                        </tr>              
                          <td><b>Phone Number </b></td>
                          <td>038352809
                          </td>
                             
                        </tr>
                       
                      </tbody>
                    </table>               
                                    </div>
                </div>            
              </font>
            </div>
              <br>
              <br>
              <br>
              <br>
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

