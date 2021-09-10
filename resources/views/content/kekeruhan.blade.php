@extends('layout.master')
@section('title','Kondisi Air')
@section('halaman','Pantau Kondisi Air Sungai')
@section('content')

<div class="col-sm-3 ">
    <a href="{{url('rekap-keruh')}}">
    <button type="button" class="btn btn-block btn-primary">Data Rekapitulasi Kekeruhan</button>
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
              <th>#</th>
              <th>Waktu</th>
              <th>NTU</th>
              <th>Keterangan</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $item )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->created_at->format('H:i:s')}}</td>
                    <td>{{$item->NTU}}</td>
                    <td>{{$item->status_kekeruhan}}</td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-bod-->
      </div>
    </div>
</div>
<!-- jQuery -->
<script src="{{asset('public/template/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('public/template/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/template/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('public/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/template/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/template/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('public/template/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('public/template/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('public/template/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/template/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('public/template/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>

  let data = @json($data);
  console.log(data);

  let created_at = [];
  let kekeruhan = [];
  data.forEach(element => {
    created_at.push(element['created_at'])
    kekeruhan.push(element['NTU'])
  });

        Highcharts.chart('chartTinggi', {

        title: {
        text: 'Grafik Kekeruhan Air'
        },

        yAxis: {
        title: {
            text: 'Kekeruhan Air'
        }
        },

        xAxis: {
            categories: created_at,
        },

        legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
        },

        plotOptions: {
        series: {
            label: {
            connectorAllowed: false
            },
        }
        },

        series: [{
        name: 'NTU',
        data: kekeruhan,
        }],

        responsive: {
        rules: [{
            condition: {
            maxWidth: 500
            },
            chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
            }
        }]
        }
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
