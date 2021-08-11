@extends('layout.master')
@section('title','Rekapitulasi Kekeruhan Air')
@section('halaman','Rekapitulasi Kekeruhan Air')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Data Rekapitulasi Kekeruhan Air</h3>
			</div>
			<!-- /.card-header -->
			 {{--
			<div class="card-body">
				 --}}
				<div class="card-body">
					<div class="pilihan">
						<div class="row form-group">
							<div class="">
								<label for="text-input" class=" form-control-label">Id alat</label>
							</div>
							<div class="col-12 col-md-10">
								<div class="dropdown">
									<select name="one" class="dropdown-select">
										<option value="">Pilih</option>
										<option value="1">01</option>
									</div>
								</div>
							</select>
						</div>
					</div>
					<div class="form-inline">
						<div class="row form-group">
							<label for="Tanggal Awal">Awal</label>
							<input type="text" class="datepicker-here form-control" name="tanggal_awal" data-language='en' data-multiple-dates="3" data-multiple-dates-separator=", " data-position='top left'/>
						</div>
						<div class="row form-group">
							<div class="col col-md-2"></div>
							<div class="col-12 col-md-10"></div>
						</div>
						<div class="row form-group">
							<label for="Tanggal Akhir">Akhir</label>
							<input type="text" class="datepicker-here form-control" name="tanggal_akhir" data-language='en' data-multiple-dates="3" data-multiple-dates-separator=", " data-position='top left'/>
						</div>
						<div class="cari">
							<div class="row form-group">
								<div class="col col-md-3"></div>
								<div class="col col-md-9">
									<button id="btn-seleksi" class="btn btn-success">
									<i class=""></i> Cari </button>
								</div>
							</div>
						</div>
					</div>
				</div>
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
				 @foreach ($data as $d )
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$d->created_at}}</td>
					<td>{{$d->NTU}}</td>
					<td>{{$d->status_kekeruhan->jenis_kekeruhan}}</td>
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
<script src="{{asset('air-datepicker')}}/dist/js/datepicker.js"></script>
<script src="{{asset('air-datepicker')}}/dist/js/i18n/datepicker.en.js"></script>
<script>
    Highcharts.chart('chartTinggi', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik Kekeruhan Air'
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
                text: 'Kekeruhan Air'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}:</td>' +
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
        name: 'NTU',
        data: [4, 4, 4, 4, 4, 4, 5, 6, 6, 7, 8, 9]
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
  <script>
    $('.datepicker-here').datepicker({
      maxDate:0,
      changeMonth: true,
      changeYear: true,
      dateFormat: 'dd-mm-yy',
      onClose: function(selectedDate) {
        table.fnDraw();}})
</script>
@endsection
