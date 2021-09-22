<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Web Pantau Air')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('public/template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/template/dist/css/adminlte.min.css')}}">
  <!-- Theme style -->
  {{-- <link rel="stylesheet" href="{{asset('template')}}/dist/css/style.css"> --}}
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('public/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"> --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.0/css/dataTables.dateTime.min.css">
  {{-- <link rel="stylesheet" href="{{asset('template')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> --}}
  {{-- s<link rel="stylesheet" href="{{asset('template')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> --}}
  <link rel="stylesheet" href="{{asset('public/air-datepicker/dist/css/datepicker.css')}}">


  @stack('custom-css')

</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('layout.nav-header')
    @include('layout.side-bar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <h1 class="m-0">@yield('halaman')</h1>
          </div><!-- /.col -->
          <div class="col-sm-3">
            <p>Tanggal/Waktu: <span id="tanggalwaktu"></span></p>
            <p><span id="jam" ></span></p>
         </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        @yield('content')
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  @include('layout.footer')
</div>
<!-- ./wrapper -->


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('public/template/plugins/jquery/jquery.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/template/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('public/template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('public/template/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
{{-- <script src="{{asset('template/plugins/chart.js/Chart.min.js')}}"></script> --}}
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/template/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/template/dist/js/pages/dashboard3.js')}}"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<!-- FLOT CHARTS -->
<script src="{{asset('public/template/plugins/flot/jquery.flot.js')}}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{asset('public/template/plugins/flot/plugins/jquery.flot.resize.js')}}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{asset('public/template/plugins/flot/plugins/jquery.flot.pie.js')}}"></script>
<!-- FLOT CHARTS -->
<script src="{{asset('public/template/plugins/flot/jquery.flot.js')}}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{asset('public/template/plugins/flot/plugins/jquery.flot.resize.js')}}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{asset('public/template/plugins/flot/plugins/jquery.flot.pie.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/template/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('public/template/dist/js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{asset('public/template/dist/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>  --}}


<script type="text/javascript">
    // 1 detik = 1000
    window.setTimeout("waktu()",1000);
    function waktu() {
    var tanggal = new Date();
    setTimeout("waktu()",1000);
    document.getElementById("jam").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
    }
    </script>
    <script>
        var tw = new Date();
        if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
        else (a=tw.getTime());
        tw.setTime(a);
        var tahun= tw.getFullYear ();
        var hari= tw.getDay ();
        var bulan= tw.getMonth ();
        var tanggal= tw.getDate ();
        var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
        var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
        document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
        </script>

</body>
</html>
