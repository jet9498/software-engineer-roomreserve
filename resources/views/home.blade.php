<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('/css/styleHome.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



    <title>HOME</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
</head>
<body  bgcolor="#8B8B83">


<main role="main">
  
 
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
      </div>

      <ul class="nav navbar-nav" id="right-Menu">
        <li class="active"><a href="home.blade.php">Home</a></li>
        <li><a href="#">Room</a></li>
        <li><a href="#">Admin</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      
    </div>
  </nav>
  
    <div id="background">
    <div class="col-md-12 col-sm-12 col-xs-12" id="allTextWelcome">
    <div class="col-md-12" style="text-align: center;">

        <font id="welcometext">ระบบจองห้องเรียนออนไลน์</font>
    </div>
    <div class="col-md-12 columDes" style="text-align: center;">
        <font id="destext" >สะดวก มีประสิทธิภาพ ใช้งานง่าย</font>

    </div>
    <div class="col-md-12 columButton" style="text-align: center;">
        <form action=" login.php">
              <button id="button-menu"><font id="textButton">เข้าสู่ระบบ</font></button>
        </form>
    </div>
  </div>
  </div>

  <div class="container">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
    <font id="aaa">ROOM</font>
    <hr/>
    <br>
     @foreach($Rooms as $Room)
      <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="card">
          <img src="img_avatar.png" alt="Avatar" style="width:100%">
            <h4><b>{{ $Room->roomName }}</b></h4> 
            <p>{{ $Room->roomDescription}}</p> 
        </div>
      </div>
     @endforeach
  
  </div>
  
   


  
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer" id="section4">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 leftfooter" style="height:auto;">
        <button id="borderButton" style="margin-bottom:40px;font-size:17px !important;">วันทำการจองห้อง</button>
        <p style="color:white;">เปิดบริการ วันจันทร์-เสาร์ เวลา 9.00–23.00 น.</p> 
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 rightfooter" style="height:auto;">
        <button id="borderButton" style="margin-bottom:40px;font-size:17px !important;">ติดต่อห้องช่าง</button>
        <font style="color:white;display:block;">Room Kasetsart University Sriracha Campus</font>
        <font style="color:white;display:block;margin-top:40px;">เว็บไซต์ : http://lib.vit.src.ku.ac.th/</font>
        <font style="color:white;display:block;">อีเมลล์ : libraryreservsrc@gmail.com</font>
        <font style="color:white;display:block;">โทรศัพท์ : 038-354580-4 ต่อ 2730</font>
                                            
          
        
      </div>
      <div id="desktopfooter">
        <font  style="margin-bottom:20px;width:100%;left:0;text-align:center;position:absolute;bottom:0;display:block;color:white;font-size:14px;">Copyright @ 2018, Room Reservation Powered By <font style="color:#F74443;">Computer Engineering-KUSRC</font></font>
      </div>
      <div id="mobilefooter">
        <font style="margin-bottom:20px;width:100%;left:0;text-align:center;position:absolute;bottom:0;display:block;color:white;font-size:14px;">Powered By <font style="color:#F74443;">CPE-KUSRC @ 2018</font></font>
      </div>
    </div>


</main>


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 @yield('content')
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

