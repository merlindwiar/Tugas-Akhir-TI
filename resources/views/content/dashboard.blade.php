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
            <span class="info-box-text">Keasaman Air</span>
            <span class="info-box-number">
              6.56
            </span>
            <span class="info-box-number">
                Asam
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-sm-6 ">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Kekeruhan Air</span>
            <span class="info-box-number">
              9.78
            </span>
            <span class="info-box-number">
                Keruh
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
  </div>
</div>
  <!-- /.container-fluid -->
  @endsection
