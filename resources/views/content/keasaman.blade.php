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
<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
  </p>
</figure>
    </div>
</div>

  <div class="card">
    <div class="panel">
        <div id="chart">

        </div>
    </div>
</div>

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
                    <td>{{$item->status_ph}}</td>
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
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
  Highcharts.chart('container', {
  chart: {
    type: 'spline',
    animation: Highcharts.svg, // don't animate in old IE
    marginRight: 10,
    events: {
      load: function () {

        // set up the updating of the chart each second
        var series = this.series[0];
        setInterval(function () {
          var x = (new Date()).getTime(), // current time
            y = Math.random();
          series.addPoint([x, y], true, true);
        }, 1000);
      }
    }
  },

  time: {
    useUTC: false
  },

  title: {
    text: 'Live random data'
  },

  accessibility: {
    announceNewData: {
      enabled: true,
      minAnnounceInterval: 15000,
      announcementFormatter: function (allSeries, newSeries, newPoint) {
        if (newPoint) {
          return 'New point added. Value: ' + newPoint.y;
        }
        return false;
      }
    }
  },

  xAxis: {
    type: 'datetime',
    tickPixelInterval: 150
  },

  yAxis: {
    title: {
      text: 'Value'
    },
    plotLines: [{
      value: 0,
      width: 1,
      color: '#808080'
    }]
  },

  tooltip: {
    headerFormat: '<b>{series.name}</b><br/>',
    pointFormat: '{point.x:%Y-%m-%d %H:%M:%S}<br/>{point.y:.2f}'
  },

  legend: {
    enabled: false
  },

  exporting: {
    enabled: false
  },

  series: [{
    name: 'Random data',
    data: (function () {
      // generate an array of random data
      var data = [],
        time = (new Date()).getTime(),
        i;

      for (i = -19; i <= 0; i += 1) {
        data.push({
          x: time + i * 1000,
          y: Math.random()
        });
      }
      return data;
    }())
  }]
});
</script>

<script>
        var options = {
          series: [{
          data: data.slice()
        }],
          chart: {
          id: 'realtime',
          height: 350,
          type: 'line',
          animations: {
            enabled: true,
            easing: 'linear',
            dynamicAnimation: {
              speed: 1000
            }
          },
          toolbar: {
            show: false
          },
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        title: {
          text: 'Dynamic Updating Chart',
          align: 'left'
        },
        markers: {
          size: 0
        },
        xaxis: {
          type: 'datetime',
          range: XAXISRANGE,
        },
        yaxis: {
          max: 100
        },
        legend: {
          show: false
        },
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();


        window.setInterval(function () {
        getNewSeries(lastDate, {
          min: 10,
          max: 90
        })

        chart.updateSeries([{
          data: data
        }])
      }, 1000)
</script>
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
  <script>
            //deklarasi variabel
        var db , ArtikelRef;

    // referensi ke database
    db = firebase.database();
    ArtikelRef = db.ref('ph');

    // menampilkan data ke halaman browser
    ArtikelRef.on('value' , dataBerhasil , dataGagal);

    function dataBerhasil(data) {
    console.log(data);
    }
    function dataGagal(err) {
    console.log(err);
    }
  </script>
@endsection
