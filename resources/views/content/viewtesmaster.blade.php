<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              {{-- @foreach ($data_terakhir_ph as $dp) --}}
              <span class="info-box-text">Keasaman Air</span>
              <h3>
                  {{-- {{$dp->kadar_ph}} --}}
                  123
              </h3>

              <p>
                  asam
                  {{-- {{$dp->status_ph}} --}}
              </p>
              {{-- @endforeach --}}
            </div>
            <div class="icon">
              {{-- <i class="ion ion-bag"></i> --}}
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-sm-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              {{-- @foreach ($data_terakhir_keruh as $dk) --}}
              <span class="info-box-text">Kekeruhan Air</span>
              <h3>
                  {{-- {{$dk->NTU}} --}}
                  123
              </h3>

              <p>
                  keruh
                  {{-- {{$dk->status_kekeruhan}} --}}
              </p>
              {{-- @endforeach --}}
            </div>
            <div class="icon">
              {{-- <i class="ion ion-stats-bars"></i> --}}
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->

        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->

        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <!-- /.card -->

          <!-- DIRECT CHAT -->
          <!--/.direct-chat -->

          <!-- TO DO List -->
          <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map card -->
          <!-- /.card -->

          <!-- solid sales graph -->
          <!-- /.card -->

          <!-- Calendar -->
          <!-- /.card -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
