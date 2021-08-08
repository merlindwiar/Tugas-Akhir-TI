@extends('layout.master')
@section('title','Kondisi Air')
@section('halaman','Pantau Kondisi Air Sungai')
@section('content')

<div class="col-sm-3  ">
    <a href="{{url('rekap-asam')}}">
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
              <th>#</th>
              <th>Waktu</th>
              <th>pH</th>
              <th>Keterangan</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $item )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->created_at->format('H:i:s')}}</td>
                    <td>{{$item->kadar_ph}}</td>
                    <td>{{$item->status_ph->jenis_ph}}</td>
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

  let data = @json($data);
  console.log(data);

  let created_at = [];
  let ph = [];
  data.forEach(element => {
    created_at.push(element['created_at'])
    ph.push(element['kadar_ph'])
  });

  // console.log(hasil)

  Highcharts.chart('chartTinggi', {

title: {
  text: 'Grafik Keasaman Air'
},

yAxis: {
  title: {
    text: 'Keasaman Air'
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
  name: 'pH',
  data: ph,
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
