@extends('layouts.app')

@section('content')
<main role="main">
  @if (Route::has('login'))
    <div class="top-right links">

    </div>
  @endif
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
      </div>
      <ul class="nav navbar-nav" id="left-Menu">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Room</a></li>
        <li><a href="#">Admin</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav" id="right-Menu">
        @if (Route::has('login'))
            <li id="Login"><a href="{{ url('/login') }}">Login</a></li>
            <li id="Register"><a href="{{ url('/register') }}">Sign Up</a></li>
        @endif
      </ul>
    </div>
  </nav>
  <div id="background">
      <font style="font-size:50px"><center>Study-Room-Reservation</center></font>
      <font style="font-size:24px"><center>สะดวก รวดเร็ว และ ง่ายดาย</center></font>
      <center><button style="margin-top:10px; width:180px;height:50px;font-size:20px;color:white;background-color:#2185D0;border:0;border-radius:3px;"><font style="padding:0;">จองห้อง</font><span class="glyphicon glyphicon-info-sign"></span></button></center>
      
  </div>
  <div class="container">
    <font id="aaa">dasdasdas</font>
    <hr/>
    <br>
     @foreach($Rooms as $Room)
      <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="card">
          <img src="img_avatar.png" alt="Avatar" style="width:100%">
          <div class="container">
            <h4><b>{{ $Room->roomName }}</b></h4> 
            <p>{{ $Room->roomDescription}}</p> 
          </div>
        </div>
      </div>
     @endforeach
  </div>


</main>
@endsection
