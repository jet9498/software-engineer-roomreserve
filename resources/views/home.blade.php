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



    <title>Room-Reservation</title>

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

          <li class="active"><a href="#section3">หน้าหลัก</a></li>
          @if(Auth::guest() || Auth::user()->status != 1)
            <li><a href="#section1">รายการห้อง</a></li>
            <li><a href="#" data-toggle="modal" data-target="#fam">ข้อปฏิบัติ</a></li>
            <li><a href="#section2">ติดต่อเรา</a></li>
           

          @else
             <li><a href="#" data-toggle="modal" data-target="#register">สร้างไอดี</a></li>

          @endif
          
        </ul>
        <ul class="nav navbar-nav navbar-right">

          @if (Auth::guest())
          
            <li><a href="#"data-toggle="modal" data-target="#id01"><span class="glyphicon glyphicon-log-in" ></span> เข้าสู่ระบบ</a></li>
            
            
          
        </ul>
      </li>
        </ul>
 
        @else

            <li class="dropdown"><a data-toggle="dropdown" href="#">{{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
            @if(Auth::guest() || Auth::user()->status != 1)
            <li><a href="section4" ><img width="23" height="22" src="{{ asset('/img/demo/manage.ico') }}"> จัดการโปรไฟล์</a></li>
                                        
            <li><a href="{{ url('/logout') }}" ><img width="23" height="22" src="{{ asset('/img/demo/logout.png') }}"> ออกจากระบบ</a></li>
            @else
            <li><a href="section4" class="glyphicon glyphicon-pencil"> จัดการโปรไฟล์</a></li>
            <li><a href="{{ url('/logout') }}" class="glyphicon glyphicon-log-in"> ออกจากระบบ</a></li>
            @endif
        @endif


        </ul>
      </div>
    </div>
  </nav>

<div class="modal fade " id="register" role="dialog" style="z-index: 9999">
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/createuser') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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


<div class="modal fade " id="createRoom" role="dialog" style="z-index: 9999">
    <!--ล็อคอินของ laravel user-->
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">สร้างห้อง</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/room/create') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="col-md-4 control-label">ชื่อห้อง</label>

                            <div class="col-md-6">
                                <input id="roomName" class="form-control" name="roomName" value="{{ old('roomName') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">รายละเอียดห้อง</label>

                            <div class="col-md-6">
                                <textarea id="roomDescription" class="form-control" name="roomDescription" value="{{ old('roomDescription') }}" required autofocus></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">ลิงค์รูปภาพ</label>

                            <div class="col-md-6">
                                <input id="imgUrk" class="form-control" name="imgUrl" value="{{ old('imgUrl') }}" required autofocus>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    สร้างห้อง
                                </button>
                                 
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




 
 @if(Auth::guest() || Auth::user()->status != 1)
    <div id="section3">
    <div id="background">
      <div class="col-md-12 col-sm-12 col-xs-12" id="allTextWelcome">
      <div class="col-md-12" style="text-align: center;">

          <font id="welcometext">ระบบจองห้องเรียนออนไลน์</font>
      </div>
      <div class="col-md-12 columDes" style="text-align: center;">
          <font id="destext" >สะดวก มีประสิทธิภาพ ใช้งานง่าย</font>
      </div>
      </div>
    </div>
  </div>
 @else
    
@endif

  <div class="container" id="section1" style="padding-top: 50px">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    @if(Auth::guest() || Auth::user()->status != 1)
      <font id="room">Room</font>
      <font id="share">Reservation</font>
    @else
      <font id="room">Admin</font>
    @endif
    @if (Auth::guest())
        <!--do nothing -->
    @elseif(Auth::user()->status == 1)
        <button style="float:right" type="button" data-toggle="modal" data-target="#createRoom">สร้างห้อง</button>
       
    @endif
  <div class="hr"></div>
    <br>
     @foreach($Rooms as $Room)

     <div class="modal fade " id="{{ $Room->roomID }}" role="dialog" style="z-index: 9999">
    <!--ล็อคอินของ laravel user-->
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">แก้ไขห้อง</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/room/edit/'.$Room->roomID.'') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="col-md-4 control-label">ชื่อห้อง</label>

                            <div class="col-md-6">
                                <input id="roomName" class="form-control" name="roomName" value="{{ $Room->roomName }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">รายละเอียดห้อง</label>

                            <div class="col-md-6">
                                <textarea id="roomDescription" class="form-control" name="roomDescription"  required autofocus>{{ $Room->roomDescription}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">ลิงค์รูปภาพ</label>

                            <div class="col-md-6">
                                <input id="imgUrl" class="form-control" name="imgUrl" value="{{ $Room->imgUrl }}" required autofocus>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    แก้ไขห้อง
                                </button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




      <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="card" style="text-align:center">

          @if($Room->imgUrl == null)
           
            <img src="{{$Room->imgUrl}}" style="width:100%;height: 150px">
          @else 
          
           @if (Auth::guest())
        
          <img src="{{$Room->imgUrl}}" style="width:100%;height: 150px">
          @elseif(Auth::user()->status == 1)
        
          <form class="form-horizontal" role="form" method="POST"  data-toggle="modal" data-target="#{{ $Room->roomID }}">{{ csrf_field() }}
            <img  src="img/demo/compose.png" style="position:absolute;right:0; margin-top:3px;margin-right:50px; width:25px;height:25px ">
          </form>
           <form class="form-horizontal" role="form" method="POST" action="{{ url('/room/delete/'.$Room->roomID.'') }}" onsubmit="return confirm('Are you sure?')">{{ csrf_field() }}
            <input type="image" src="img/demo/delete.ico" style="position:absolute;right:0; margin-top:3px;margin-right:18px; width:25px;height:25px ">
          </form>
            <img src="{{$Room->imgUrl}}" alt="Avatar" style="width:100%;height: 150px">
            @else
            <img src="{{$Room->imgUrl}}" style="width:100%;height: 150px">
            @endif
          @endif
            <h4><b>{{ $Room->roomName }}</b></h4>
            <p>{{ $Room->roomDescription}}</p>
            <div class="col-md-12 columButton" style="text-align: center;padding-top: 1vw">
              @if (Auth::guest())
              <!-- เพิ่มเงื่อนไขการจองห้องถ้าไม่ล็อคอินจะต้องล็อคอินก่อน -->
              <a href="#" target='_parent'data-toggle="modal" data-target="#id01"><button id="button-menu" data-toggle="modal" data-target="#login-modal"><font id="textButton">จอง</font></button></a>
              <a href="{{ url('/room/view/'.$Room->roomID.'') }}" target='_parent'><button id="button-menu1" data-toggle="modal" ><font id="textButton">ตารางเวลา</font></button></a>
              @elseif(Auth::user()->status == 1)
              <a href="{{ url('/room/addtable/'.$Room->roomID.'') }}" target='_parent'><button id="button-menu" data-toggle="modal" data-target="#login-modal"><font id="textButton">Show</font></button></a>
              @else
              <a href="{{ url('/room/reservations/'.$Room->roomID.'') }}" target='_parent'><button id="button-menu" data-toggle="modal" data-target="#login-modal"><font id="textButton">จอง</font></button></a>
              <a href="{{ url('/room/view/'.$Room->roomID.'') }}" target='_parent'><button id="button-menu1" data-toggle="modal" ><font id="textButton">ตารางเวลา</font></button></a>
              @endif
              


    </div>
        </div>
      </div>
     @endforeach
   </div>

  <br>
  <br>
  <br>
  <div id="failLogin" style="display:none" data-value="{{ $fail }}"></div>
  @if(Auth::guest() || Auth::user()->status != 1)
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer" id="section2">
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
      </div>
    @else

    @endif


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
  var fail = document.getElementById("failLogin").getAttribute('data-value');
  if(fail == 1){
    $('#id01').modal('show');
  }
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
