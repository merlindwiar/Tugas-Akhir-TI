@extends('layout.master')
@section('title','Kondisi Air')
@section('halaman','Pantau Kondisi Air Sungai')
@section('content')

<div class="col-sm-3  ">
    <a href="/rekap-asam">
    <button type="button" class="btn btn-block btn-primary">Data Rekapitulasi Keasaman</button>
    </a>
  </div><br>

<div class="card">
    <div class="panel">
        <div id="chartTinggi">

        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Kondisi Air Sungai</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="tabel1" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Waktu</th>
              <th>pH</th>
              <th>Keterangan</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>01:00:00</td>
              <td>7.00</td>
              <td>pH Netral</td>
            </tr>
            <tr>
                <td>02:00:00</td>
                <td>5.43</td>
                <td>pH Asam</td>
            </tr>
            <tr>
                <td>03:00:00</td>
                <td>5.23</td>
                <td>pH Asam</td>
            </tr>
            <tr>
                <td>04:00:00</td>
                <td>6.34</td>
                <td>pH Asam</td>
            </tr>
            <tr>
                <td>05:00:00</td>
                <td>6.56</td>
                <td>pH Asam</td>
            </tr>
            <tr>
                <td>06:00:00</td>
                <td>7.00</td>
                <td>pH Netral</td>
            </tr>
            <tr>
                <td>07:00:00</td>
                <td>8.23</td>
                <td>pH Basa</td>
            </tr>
            <tr>
                <td>08:00:00</td>
                <td>8.23</td>
                <td>pH Basa</td>
            </tr>
            <tr>
                <td>09:00:00</td>
                <td>9.12</td>
                <td>pH Basa</td>
            </tr>
            <tr>
                <td>10:00:00</td>
                <td>7.00</td>
                <td>pH Netral</td>
            </tr>
            <tr>
                <td>11:00:00</td>
                <td>8.12</td>
                <td>pH Basa</td>
            </tr>
            <tr>
                <td>12:00:00</td>
                <td>6.56</td>
                <td>pH Asam</td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-bod-->
      </div>
    </div>
</div>
<!-- jQuery -->
<script src="{{asset('template')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('template')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('template')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('template')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('template')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('template')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('chartTinggi', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik Keasaman Air'
        },
        xAxis: {
            categories: [
                '01:00:00',
                '02:00:00',
                '03:00:00',
                '04:00:00',
                '05:00:00',
                '06:00:00',
                '07:00:00',
                '08:00:00',
                '09:00:00',
                '10:00:00',
                '11:00:00',
                '12:00:00'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Keasaman Air'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'pH',
            data: [7.00, 5.43, 5.23, 6.34, 6.56, 7.00, 8.23, 8.23, 9.12, 7.00, 8.12, 6.56]

        }
        ]
    });
</script>
<script>
      $('#tabel1').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
  </script>
@endsection
