@extends('layouts.admin')
@section('content')

<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
          <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
      body {
        font-family: 'Arial', sans-serif;
        font-size: 12px;
      }
    </style>
  </head>
 <body>
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                @php
                $total_open =App\Models\Ticketing::where('nama_stat','open')->get()->count();
               @endphp
              <div class="huge"><h5>{{$total_open}}</h5></div>
              </div>
              <div><p><b>&nbsp;Open</p></b></div>
              <div class="icon">
                <i class=""></i>
              </div>
              <a href="ticketing" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                @php
                $total_onprogress =App\Models\Ticketing::where('nama_stat','on progress')->get()->count();
               @endphp
              <div class="huge"><h5>{{$total_onprogress}}</h5></div>
              </div>
              <div><p><b>&nbsp;On Progress</p></b></div>
              <div class="icon">
                <i class=""></i>
              </div>
              <a href="ticketing" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                @php
                $total_hold =App\Models\Ticketing::where('nama_stat','hold')->get()->count();
               @endphp
              <div class="huge"><h5>{{$total_hold}}</h5></div>
              </div>
              <div><p><b>&nbsp;Hold</p></b></div>
              <div class="icon">
                <i class=""></i>
              </div>
              <a href="ticketing" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                @php
                $total_close =App\Models\Ticketing::where('nama_stat','close')->get()->count();
               @endphp
              <div class="huge"><h5>{{$total_close}}</h5></div>
              </div>
              <div><p><b>&nbsp;Close</p></b></div>
              <div class="icon">
                <i class=""></i>
              </div>
              <a href="ticketing" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>




@endsection
