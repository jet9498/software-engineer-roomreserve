@extends('layouts.app')

@section('content')
<main role="main">

      <!--start slide-->
      <div class="card bg-dark text-white">
        <img class="card-img" src="img/demo/photo.jpg" alt="Card image">
        <div class="card-img-overlay">
          <br>
          <br>
          <br>
          <center><FONT SIZE="+20" class="card-title">YOUR WELCOME</FONT></center>
          <center><p class="card-text">ยินดีต้อนรับสู่ระบบจองห้อง</p></center>

  </div>
</div>



      <!--end slide-->

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">

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

                      <!--<button type="button" class="btn btn-sm btn-outline-secondary">จอง</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">ดู</button>
                    </center>-->
                    </div>

                  </div>
                </div>
              </div>
            </div>
        @endforeach

          


          </div>

        </div>

      </div>
      <section id="list">
          <div class="container">
              <header class="body-header">
                  <h2>เกี่ยวกับเรา.</h2>
                  <p>ไม่มีใครรู้จักตัวคุณนอกจากตัวคุณเอง</p>
              </header>
              <article>
                  <div class="list-row cf">
                      <div class="list-item">
                          <i class="fa fa-bullhorn fa-2x"></i>
                          <h3>ติดต่อเรา</h3>
                          <p>ใครบ้างก็ไม่รู้เหมือนกัน</p>
                      </div>

                  </div>


              </article>
          </div>
      </section>


    </main>
@endsection
