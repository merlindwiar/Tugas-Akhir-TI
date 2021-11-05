@extends('layout.master')
@section('title','Dashboard')
@section('halaman','Dashboard')
@section('content')

<div class="container-fluid">
    <div class="row">
    {{-- <div class="col-sm-4 ">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Ketinggian Air</span>
            <span class="info-box-number">
              18 meter
            </span>
            <span class="info-box-number">
                Siaga
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div> --}}
      <div class="col-sm-6 ">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

          <div class="info-box-content">
              @foreach ($data_terakhir as $dp)
              <span class="info-box-text">Keasaman Air</span>
              <span class="info-box-number">
                {{$dp->kadar_ph}}
              </span>
              <span class="info-box-number">
                  {{$dp->status_ph}}
              </span>
              @endforeach
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-sm-6 ">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

          <div class="info-box-content">
              @foreach ($data_terakhir as $dk)
              <span class="info-box-text">Kekeruhan Air</span>
              <span class="info-box-number">
                {{$dk->NTU}}
              </span>
              <span class="info-box-number">
                  {{$dk->status_kekeruhan}}
              </span>
              @endforeach
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
  </div>
</div>
  <!-- /.container-fluid -->
  @endsection
