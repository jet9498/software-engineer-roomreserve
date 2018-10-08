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
      <center><button style="margin-top:10px; width:180px;height:50px;font-size:20px;color:white;background-color:#2185D0;border:0;border-radius:3px">จองห้อง</button></center>
      
  </div>

         @foreach($Rooms as $Room)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                  <br>
                 <center><p>{{ $Room->roomName }}</p></center>
                <img class="card-img-top" src="img/demo/box1.jpg" alt="">
                <div class="card-body">
                  <p>{{ $Room->roomDescription }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <div>
                          <button type="button" class="btn btn-success" href = "login.php">จองห้อง</button>
                          <button type="button" class="btn btn-primary">ดู</button>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
        @endforeach


</main>
@endsection
