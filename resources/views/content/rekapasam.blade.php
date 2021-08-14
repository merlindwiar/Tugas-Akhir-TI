@extends('layout.master') @section('title','Rekapitulasi Keasaman Air') @section('halaman','Rekapitulasi Keasaman Air') @section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Data Rekapitulasi Keasaman Air</h3>
			</div>
			<!-- /.card-header -->
			<form action="search_created_at" method="POST">
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
					 {{--
					<form action="{{url('filter-asam')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
						 --}} {{-- {{ csrf_field() }} --}}
						<div class="form-inline">
							<div class="row form-group mx-2">
								<label for="Tanggal Awal">Awal</label>
								<input type="text" id="min" class="form-control mx-2" name="min" data-language='en'/>
							</div>
							<div class="row form-group">
								<label for="Tanggal Akhir">Akhir</label>
								<input type="text" id="max" class="form-control mx-2" name="max" data-language='en'/>
							</div>
							 {{--
							<div class="cari">
								<div class="row form-group">
									<div class="col col-md-3"></div>
									<div class="col col-md-9">
										<button id="btn-seleksi" class="btn btn-success">
										<i class=""></i> Cari </button>
									</div>
								</div>
							</div>
							 --}}
						</div>
						 {{--
					</form>
					 --}}
				</div>
			</div>
		</form>
		<table id="tabel1" class="table table-bordered table-hover">
		<thead>
		<tr>
			<th>#</th>
			<th>Waktu</th>
			<th>Kadar pH</th>
			<th>Keterangan</th>
		</tr>
		</thead>
		<tbody>
		 {{-- @if (isset($data)) --}} @foreach ($data as $d )
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$d->created_at}}</td>
			<td>{{$d->kadar_ph}}</td>
			<td>{{$d->status_ph}}</td>
		</tr>
		 @endforeach {{-- @endif --}}
		</tbody>
		</table>
		<button type="submit" class="btn btn-primary btn-sm">
		<i class="fa fa-dot-circle-o"></i> Export Excel </button>
		<button type="reset" class="btn btn-danger btn-sm">
		<i class=""></i> Cetak PDF </button>
	</div>
</div>
</div>
</div>
<!-- /.card-bod-->
</div>
</div>
</div>
<!-- jQuery -->
 {{--
<script src="{{asset('template')}}/plugins/jquery/jquery.min.js"></script>
 --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
 {{--
<script src="{{asset('template')}}/plugins/datatables/jquery.dataTables.min.js"></script>
 --}}
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.0/js/dataTables.dateTime.min.js"></script>
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
 {{--
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
 --}}
<script>
  var minDate, maxDate;
    // DataTables initialisation
    var table = $('#tabel1').DataTable();
    // Create date inputs
    minDate = new DateTime($('#min'), {
        format: 'YYYY-MM-DD'
    });
    maxDate = new DateTime($('#max'), {
        format: 'YYYY-MM-DD'
    });


// Custom filtering function which will search data in column four between two values
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = minDate.val();
        var max = maxDate.val();
        var date = new Date(data[1]);
        if (
            ( min === null && max === null ) ||
            ( min == null && date <= max ) ||
            ( min <= date   && max == null ) ||
            ( min <= date   && date <= max )
        ) {
            return true;
        }
        return false;
    }
);
// Refilter the table
$('#min, #max').on('change', function () {
        table.draw();
    });

</script>

{{-- <script>
$(document).ready(function() {
    $('#tabel1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );

</script> --}}

@endsection
