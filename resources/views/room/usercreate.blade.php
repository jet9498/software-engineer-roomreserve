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

    <script src="http://127.0.0.1:8000/js/styleapp.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

  <link rel="stylesheet" href="http://127.0.0.1:8000/css/Datetimepicker.css">

  <script src="http://127.0.0.1:8000/js/datetimepicker.min.js"></script>


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




          @if(Auth::user()->status == 0)
          <li><a href="#" data-toggle="modal" data-target="#fam">ข้อปฏิบัติ</a></li>
          <li><a href="#"data-toggle="modal" data-target="#contact">ติดต่อเรา</a></li>
          @endif
        </ul>
        <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown"><a data-toggle="dropdown" href="#"><img width="23" height="22" src="{{ asset('/img/demo/profile.png') }}"> {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">

            <li><a href="{{ url('/usercreate') }}" ><img width="23" height="22" src="{{ asset('/img/demo/fixing.png') }}"> จัดการโปรไฟล์</a></li>

            <li><a href="{{ url('/logout') }}" ><img width="23" height="22" src="{{ asset('/img/demo/logout.png') }}"> ออกจากระบบ</a></li>

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
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        <input type="hidden" name="_token" value="">

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

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

                                <button class="btn btn-primary"href="#" data-toggle="modal" data-target="#id02">
                                    Admin
                                </button>


                                <a class="btn btn-link" href="http://127.0.0.1:8000/password/reset">
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
        <div class="col-md-12 col-md-offset-0">


          <br>
          <br>
          <br>
          <br>

          @if(Session::has('flash_message4'))
            <div class="alert alert-success"><em> <center><li>{!! session('flash_message4') !!}</li></center></em></div>
          @endif
          @if(Session::has('flash_message5'))
            <div class="alert alert-danger"><em> <center><li>{!! session('flash_message5') !!}</li></center></em></div>
          @endif
          <h2 class="ui left floated header"style="width:100%"><font id="statustext" size="6" color="#B92000">User</font>
            <font id="roomnametext" size="5" color="#828282">Information</font>
            <div class="hr"></div>

          </h2>
            <div class="ui clearing divider"></div>
            <div class="ui grey two item stackable menu" id="menu">
                    <a class="item" href="#"data-toggle="modal" data-target="#change-password">
                        <img src="{{ asset('/img/demo/key.png') }}"><font size="2">&nbsp;เปลี่ยนรหัสผ่าน</font></a>

                    <a class="item" href="#"data-toggle="modal" data-target="#edit-profile">
                        <img src="{{ asset('/img/demo/profile1.png') }}"><font size="2">&nbsp;แก้ไขโปรไฟล์</font></a>

                </div>

                    <div class="ui clearing divider"></div>

                    <!-- ////////////////////// ส่วนของตาราง //////////////// -->
                                        <br>
                    <div class="wrap_schedule"  style="overflow-x:auto;">

                <!-- ////////////////////// ส่วนของตาราง //////////////// -->
          <br>
           <div class="modal fade " id="change-password" role="dialog" style="z-index: 9999">

              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">


                      <div class="ui clearing divider"></div>
                        <div class="ui raised segment">
                              <br>
                <br>
                  @if(count($errors)>0)
                <ul>
                  @foreach($errors->all() as $error)
                    <li class ="alert alert-danger"><font size ="3">{{$error}}</font></li>
                  @endforeach
                </ul>
              @endif
              @if(Session::has('flash_message'))
                <div class="alert alert-danger"><em> <center><li><font size="3" >{!! session('flash_message') !!}</font></li></center></em></div>
              @endif

                <form class="form-horizontal" action="{{ url('/room/usercreate/'.Crypt::encrypt(Auth::user()->id)) }}" method="post" enctype="multipart/form-data" onsubmit="return confirm('คุณแน่ใจที่จะเปลี่ยนพาสเวิร์ดแล้วใช่ไหม?')">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <font size ="3">
                      <div class="form-group">
                        <label class="col-md-4 control-label">Old Password<font color ="red">**</font></label>
                        <div class="col-md-6">
                          <input type="password" name="oldpassword" class="form-control" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label">New Password<font color ="red">**</font></label>
                        <div class="col-md-6">
                          <input type="password" name="password" class="form-control" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm New Password<font color ="red">**</font></label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                      </div>
                    </font>
                    <div class="form-group">
                         <div class="col-md-6 col-md-offset-4">
                           <button type="submit" class="btn btn-primary">
                               <i class="write icon"></i>Submit
                          </button>
                        </div>
                    </div>
               </form>

             <br>
        </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
         </div>
<div class="modal fade " id="edit-profile" role="dialog" style="z-index: 9999">

           <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">


                    </div>
                  </div>
                </div>
              </div>
</div>

          @if(Auth::user()->status == 0)
          @if(count($Rsroom) != 0)
          <div class="table-responsive table-inverse transition visible" id="table" style="display: block !important;">
              <table class="table table-bordered" id="border">
                <tbody><tr>
                </tr></tbody><thead>
                  <tr>
                  <th class="bg-primary">Room</th>
                  <th class="bg-primary">Date</th>
                  <th class="bg-primary">Use Time</th>
                  <th class="bg-primary">Status</th>
                  <th class="bg-primary">Cancle</th>
                </tr>
                </thead>
                <?php $i=0 ?>
                <?php $j=0 ?>
          @else
            <ul  class ="alert alert-danger">
            <font size ="3">ไม่มีข้อมูลการจอง</font>
            </ul>

          @endif
          @foreach($Rsroom as $Rsrooms)
          @if(Auth::user()->id == $Rsrooms->userID)
                  <tbody >

                  <tr>
                   <td class="bg-warning"><font size="3">{{$roomName[$j]}}</font></td>
                   <td class="bg-warning"><font size="3"><?php echo substr($Rsrooms->RsStart, 8 ,2); ?>-<?php echo substr($Rsrooms->RsStart, 5 ,2); ?>-<?php echo (int)substr($Rsrooms->RsStart, 0 ,4)+543; ?></font></td>
                   <td class="bg-warning"><font size="3"><?php echo substr($Rsrooms->RsStart, 11 ,9); ?> - <?php echo substr($Rsrooms->RsEnd, 11 ,9); ?></font></td>
                   <td class="bg-warning">

                    @if($status[$i] == "รอใช้งาน")
                          <img width="12" height="12" src="{{ asset('/img/demo/circlewaiting.png') }}">&nbsp;<font size="3" color="red">{{$status[$i]}}</font>
                    @else
                          <img width="12" height="12" src="{{ asset('/img/demo/circleready.png') }}">&nbsp;<font size="3" color="red">{{$status[$i]}}</font>
                    @endif


                    </td>
                  <form action="{{ url('/room/reservations/'.$Rsrooms->RsroomID.'') }}" method="post">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <input type="hidden" name="_method" value="DELETE">
                  <td class="bg-warning"><button class="btndanger"><i class="fa fa-close"></i></button></td>
                  </form>
                  </tr>
                  </tbody>

                  <?php $j++ ?>
                  <?php $i++ ?>

          @endif


          @endforeach


             </table>
         </div>
         @else
            <div class="container" style="background-color: white">
            <div class="row">
            <div class="col-md-6 img">
            <img src="http://libapp.src.ku.ac.th/seimg/user.png"  alt="" class="img-rounded">
              </div>
              <div class="col-md-6 details">
                <blockquote>
                  <h5>{{Auth::user()->name}}</h5>
                  <small><cite title="Source Title">{{Auth::user()->email}}<i class="icon-map-marker"></i></cite></small>
                  <small><cite title="Source Title">{{Auth::user()->created_at}}<i class="icon-map-marker"></i></cite></small>
                </blockquote>
                
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>

    <center>
    <div class="navbar-fixed-bottom" id="para2" style="display: block;">
        <i class="wizard icon"></i>
        <font size="2"> Powered by CPE-KUSRC © 2018</font>
    </div>
    </center>
    <!-- Scripts -->
    <script src="http://127.0.0.1:8000/js/semantic.min.js"></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <script>
$(document).ready(function(){
  var fail = document.getElementById("failLogin").getAttribute('data-value');
  if(fail == 1){
    $('#change-password').modal('show');
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
</div>
</body>
</html>
