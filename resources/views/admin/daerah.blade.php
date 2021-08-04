@extends('layout.master')
@section('title','Titik Pemantauan')
@section('halaman','Titik Pemantauan')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kelola Data Titik Pantau</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Tabel Lokasi Titik Pemantauan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="col-sm-2">
                        <a href="{{url('tambah-titik')}}">
                        <button type="button" class="btn btn-block btn-primary">Tambah Data</button>
                        </a>
                      </div><br>
                  <table id="tabel1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nama alat</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                          </tr>
                          </thead>
                          <tbody>
                              @foreach ($dtAlat as $item )

                              @endforeach
                              <tr>
                                <td>{{$item->nama_alat}}</td>
                                <td>{{$item->latitude}}</td>
                                <td>{{$item->longitude}}</td>
                                <td>
                                    <a href="/edit-titik" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                </td>
                              </tr>
                </tbody>
                  </table>
                </div>
                <!-- /.card-bod-->
              </div>
            </div>
        </div>
    </div>
    <!-- /.content -->


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('assets/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/dist/js/pages/dashboard3.js')}}"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<!-- FLOT CHARTS -->
<script src="{{asset('assets/plugins/flot/jquery.flot.js')}}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{asset('assets/plugins/flot/plugins/jquery.flot.resize.js')}}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{asset('assets/plugins/flot/plugins/jquery.flot.pie.js')}}"></script>
<!-- FLOT CHARTS -->
<script src="{{asset('assets/plugins/flot/jquery.flot.js')}}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{asset('assets/plugins/flot/plugins/jquery.flot.resize.js')}}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{asset('assets/plugins/flot/plugins/jquery.flot.pie.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
</body>
</html>
@endsection
