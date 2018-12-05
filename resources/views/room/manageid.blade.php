<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('/css/styleHome.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



    <title>Manage ID</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
</head>

<body  style="background-color:#E0E3E4">

<main role="main" style="margin-top:50px" >

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="myNavbar"style="width: -webkit-fill-available">
        <ul class="nav navbar-nav navbar-left" id="left-Menu">


           <li style="border-bottom:2px solid red;"><a href="/">Back</a></li>

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
  


  <div class="container" id="section1" style="padding-top: 10px">
    <font id="room">Edit</font>
    <font id="share">by Admin</font>
   <div class="hr"></div>
    <br>
    <div class="container text-center">
      <div class="row content">
        <font id="room">ลงตารางเวลา</font>
          <div class="row content">
            @foreach($Rooms as $Room)
              <div class="col-sm-3 ">
                <ul  class="nav nav-pills nav-stacked">
                  <h4><b>{{ $Room->roomName }}</b></h4>
                  <!-- <a href="{{ url('/room/reservations/'.$Room->roomID.'') }}" target='_parent'><button id="button-menu" data-toggle="modal" ><font id="textButton"><span class="glyphicon glyphicon-pencil"></span> ลงตารางเวลา</font></button></a> -->
                  <li ><a href="{{ url('/myreservation') }}" id="button-menu"><font id="textButton"><span class="glyphicon glyphicon-pencil"></span> ลงตารางเวลา</font></a></li>
            <!-- <a href="{{ url('/myreservation') }}" target='_parent'><button id="button-menu1" data-toggle="modal" ><font id="textButton"><span class="glyphicon">&#xe065;</span> แก้ไขการจองห้อง</font></button></a> -->
                </ul>
              </div>
            @endforeach
          </div>
      </div>
      <br>
    </div>
    <div class="hr"></div>

    <div class="table-responsive table-inverse transition visible" id="table" style="display: block !important;">
              <table class="table table-bordered" id="border">
                <tbody><tr>
                </tr></tbody><thead>
                  <tr><th class="bg-primary">Name</th>
                  <th class="bg-primary">Email</th>
                  <th class="bg-primary">Password</th>
                  
                  <th class="bg-primary">Cancle</th>
                </tr>
                </thead>
              
                  <tbody >
    <br>


      <!-- <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="card" style="text-align:center">
          <img src="img/demo/{{$Room->remember_token}}" alt="Avatar" style="width:100%">
            <h4><b>{{ $Room->roomName }}</b></h4>

            <div class="col-md-13 columButton" style="text-align: center">

              <a href="{{ url('/room/reservations/'.$Room->roomID.'') }}" target='_parent'><button id="button-menu" data-toggle="modal" ><font id="textButton"><span class="glyphicon glyphicon-pencil"></span> จองห้องทั้งเทอม</font></button></a>


            </div>
        </div>
      </div> -->

   </div>
  <br>
  <br>
  <br>
  <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer" id="section2">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 leftfooter" style="padding-left:10vw"style="height:auto;">
        <button id="borderButton" style="margin-bottom:40px;font-size:17px !important;">วันทำการจองห้อง</button>
        <p style="color:white;">เปิดให้บริการทุกวัน วันจันทร์ - อาทิตย์ เวลา 9.00–23.00 น.</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 rightfooter" style="padding-left:10vw"style="height:auto;">
        <button id="borderButton" style="margin-bottom:40px;font-size:17px !important;">ติดต่อห้องช่าง</button>
        <font style="color:white;display:block;">Room Kasetsart University Sriracha Campus</font>
        <font style="color:white;display:block;margin-top:40px;">เว็บไซต์ : -</font>
        <font style="color:white;display:block;">อีเมลล์ : Niwes@eng.src.ku.ac.th</font>
        <font style="color:white;display:block;">โทรศัพท์ : 038-354-581-4 #2822</font>

      </div>
      <div id="desktopfooter">
        <font  style="margin-bottom:20px;width:100%;left:0;text-align:center;position:absolute;bottom:0;display:block;color:#DE2714;font-size:14px;">Copyright @ 2018, Room Reservation Powered By <font style="color:white;">Computer Engineering-KUSRC</font></font>
      </div>
      <div id="mobilefooter">
        <font style="margin-bottom:20px;width:100%;left:0;text-align:center;position:absolute;bottom:0;display:block;color:#DE2714;font-size:14px;">Powered By <font style="color:white;">CPE-KUSRC @ 2018</font></font>
      </div>
    </div> -->


</main>
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
          <span>1) ในการจองห้องจะต้องจอง 1 ชั่วโมงขึ้นไป </span>
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


 @yield('content')
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

</body>
</html>
