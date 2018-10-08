<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{ asset('/css/styleHome.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
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

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </body>
</html>
