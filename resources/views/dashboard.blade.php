@extends('layouts.frontend')

@section('title')
  Dashboard
@stop

@section('content')
<div class="x_panel">
  <div class="x_title">
    <h2>Dashboard</h2>
    <div class="clearfix"></div>
  </div>
</div>
<br><br>
<div class="row">
  <div class="col-md-4">
    <div class="x_panel">
      <div class="x_title">
        <h2>Laporan Seluruh</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-md-6">
            <h2> <strong>Total : </strong> {{$total}} Buah</h2>
          </div>
          <div class="col-md-6 text-right">
            <a href="#!" class="btn btn-primary">Lihat</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="x_panel">
      <div class="x_title">
        <h2>Laporan Kendaraan</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-md-6">
            <h2> <strong>Total : </strong> {{$total_kendaraan}} Buah</h2>
          </div>
          <div class="col-md-6 text-right">
            <a href="{{route('kendaraan.index')}}" class="btn btn-primary">Lihat</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="x_panel">
      <div class="x_title">
        <h2>Laporan BPKB</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-md-6">
            <h2> <strong>Total : </strong> {{$total_bpkb}} Buah</h2>
          </div>
          <div class="col-md-6 text-right">
            <a href="{{route('bpkb.index')}}" class="btn btn-primary">Lihat</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br>
<div class="row">
  <div class="col-md-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Grafik Laporan</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
      		<div id="app">
            {!! $chart_laporan->container() !!}
          </div>
          <script src="https://unpkg.com/vue"></script>
          <script>
              var app = new Vue({
                  el: '#app',
              });
          </script>
      		@php
      			$chart_laporan->api_url = '';
      		@endphp
          <script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
          {!! $chart_laporan->script() !!}
      </div>
    </div>
  </div>
</div>
@endsection
