@extends('layouts.frontend')
@section('style')
  <style media="screen">
    @page size-A4 {size:  21.0cm 29.7cm; margin: 1.5cm;}
    body {
       padding: 0;
       margin: 0;
    }
  </style>
@stop

@section('title')
  Cetak Kendaraan {{$laporan->no_surat_pengantar}}
@stop

@section('content')
<?php

  function roma($bulan)
  {
      if($bulan=='01'){
        $bulan = 'I';
      }elseif('02'){
        $bulan = 'II';
      }elseif('03'){
        $bulan = 'III';
      }elseif('04'){
        $bulan = 'IV';
      }elseif('05'){
        $bulan = 'V';
      }elseif('06'){
        $bulan = 'VI';
      }elseif('07'){
        $bulan = 'VII';
      }elseif('08'){
        $bulan = 'VIII';
      }elseif('09'){
        $bulan = 'IX';
      }elseif('10'){
        $bulan = 'X';
      }elseif('11'){
        $bulan = 'XI';
      }elseif('12'){
        $bulan = 'XII';
      }

      echo $bulan;
  }
?>
<div class="x_panel">
  <div class="x_title">
    <h2>Cetak Kendaraan {{$laporan->no_surat_pengantar}}</h2>
    <ul class="nav navbar-right panel_toolbox">
      <a onclick="printContent('cetak')" class="btn btn-success">Cetak Kendaraan</a>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content" id="cetak" style="color:black;">
    <div class="row">
      <div class="col-md-4 text-center">
        <table>
          <tr>
            <td>
            <p style="font-size:1.2em;">KEPOLISIAN NEGARA REPUBLIK INDONESIA
            <br>
            DAERAH SUMATERA BARAT <br>
            DIREKTORAT RESERSE KRIMINAL UMUM</p></td>
          </tr>
          <tr>
            <td><hr style="height:1px;border:none;color:#333;width:350px;background-color:#333;border-bottom:1px solid #333;margin-top:-10px;display: block">
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="text-center">
          <img src="{{asset('img/polri.jpg')}}" alt="" style="width:100px">
          <h3 style="color:black;padding-bottom:-0px;margin-bottom:-20px;">SURAT KETERANGAN</h3>
          <hr style="height:1px;border:none;color:#333;background-color:#333;width:360px;border-bottom:1px solid #333;margin-bottom:-0px" />
          <p style="font-size:1.2em;">Nomor : SKET/&emsp;&emsp;/{{roma(Carbon\Carbon::now()->format('m'))}}/Res.1.24/{{Carbon\Carbon::now()->format('Y')}}/Ditrireskrimum</p>
      </div>
    </div>
    <br>
    <p style="font-size:1.2em;">Yang bertanda Tangan dibawah ini, DIREKTUR RESERSE KRIMINAL UMUM POLDA SUMBAR, Menerangkan Bahwa Kendaraan Bermotor  yang identitasnya tersebut dibawah ini :</p>
    <br>
    <div class="row">
      <div class="form-group"  style="color:black;font-size:16px;text-align:justify;margin-left:20px">
        <table>
          <thead>
            <th style="width:200px;vertical-align: top;"></th>
            <th style="width:30px;vertical-align: top;"></th>
            <th style="width:500px"></th>
          </thead>
          <tbody>
            <tr>
              <td style="width:200px;vertical-align: top;">Merek / Type</td>
              <td style="width:30px;vertical-align: top;"> : </td>
              <td>{{$laporan->merek_type}}</td>
            </tr>
            <tr>
              <td style="width:200px;vertical-align: top;">No. Pol.</td>
              <td style="width:30px;vertical-align: top;"> : </td>
              <td>{{$laporan->no_pol}}</td>
            </tr>
            <tr>
              <td style="width:200px;vertical-align: top;">Nama</td>
              <td style="width:30px;vertical-align: top;"> : </td>
              <td>{{$laporan->nama_pemilik}}</td>
            </tr>
            <tr>
              <td style="width:200px;vertical-align: top;">Alamat</td>
              <td style="width:30px;vertical-align: top;"> : </td>
              <td>{{$laporan->alamat}}</td>
            </tr>
            <tr>
              <td style="width:200px;vertical-align: top;">Jenis Kendaraan</td>
              <td style="width:30px;vertical-align: top;"> : </td>
              <td>{{$laporan->jenis->nama}}</td>
            </tr>
            <tr>
              <td style="width:200px;vertical-align: top;">Tahun Pembuatan</td>
              <td style="width:30px;vertical-align: top;"> : </td>
              <td>{{$laporan->tahun_pembuatan}}</td>
            </tr>
            <tr>
              <td style="width:200px;vertical-align: top;">Tahun Perakitan</td>
              <td style="width:30px;vertical-align: top;"> : </td>
              <td>{{$laporan->tahun_perakitan}}</td>
            </tr>
            <tr>
              <td style="width:200px;vertical-align: top;">Warna</td>
              <td style="width:30px;vertical-align: top;"> : </td>
              <td>{{$laporan->warna}}</td>
            </tr>
            <tr>
              <td style="width:200px;vertical-align: top;">No Rangka</td>
              <td style="width:30px;vertical-align: top;"> : </td>
              <td>{{$laporan->no_rangka}}</td>
            </tr>
            <tr>
              <td style="width:200px;vertical-align: top;">No Mesin</td>
              <td style="width:30px;vertical-align: top;"> : </td>
              <td>{{$laporan->no_mesin}}</td>
            </tr>
            <tr>
              <td style="width:200px;vertical-align: top;">Nomor BPKB</td>
              <td style="width:30px;vertical-align: top;"> : </td>
              <td>{{$laporan->no_bpkb}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <p style="font-size:1.2em;">Setelah dilakukan pengecekan sesuai dengan data yang ada pada kami ternyata BPKB kendaraan tersebut memang HILANG sesuai dengan Laporan Pengaduan Nomor : {{$laporan->no_surat_pengantar}}, Tanggal {{$laporan->tanggal_surat->format('d F Y')}}, sebagaimana terlampir, dan Tidak tercantum dalam Daftar Pencarian Barang (DPB) yang merupakan Tindak Pidana.</p>
      </div>
    </div>
    <br>
    <div class="row">
      <div align="right" style="font-size:1.2em">
          <table border="0" style="margin-right:20px">
            <tr>
              <td>
                <table style="width:100%">
                  <tbody>
                    <tr>
                      <td>Dikeluarkan di</td>
                      <td style="text-align:center"> : </td>
                      <td style="text-align:justify;">&#160;&#160;&#160;P&#160;&#160;&#160;a&#160;&#160;&#160;d&#160;&#160;&#160;a&#160;&#160;&#160;n&#160;&#160;&#160;g</td>
                    </tr>
                    <tr style="border-bottom:2px solid #333;">
                      <td>Pada Tanggal</td>
                      <td style="text-align:center"> : </td>
                      <td style="text-align:right">&emsp;&emsp;-&emsp;&emsp;- &emsp;{{Carbon\Carbon::now()->format('Y')}}</td>
                    </tr>
                  </tbody>
                </table>
                <table style="width:100%">
                  <thead>
                    <th style="width:100px;vertical-align: top;"></th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>an. DIRRESKRIMUM POLDA SUMBAR</td>
                    </tr>
                    <tr>
                      <td  style="text-align:center">KASUBBAG RENMIN</td>
                    </tr>
                  </tbody>
                </table>
                <br><br><br>
                <div style="text-align:center">
                  {{$laporan->ttd->nama}}
                  <div style="border-bottom:2px solid #333;"></div><br>
                  <p style="margin-top:-20px">{{$laporan->ttd->jabatan}}&emsp;NIP. {{$laporan->ttd->nrp}}12312121</p>
                </div>
              </td>
            </tr>
          </table>
      </div>
    </div>
  </div>
</div>

<script>
  function printContent(el){
    var restorepage = document.body.innerHTML;
  	var printcontent = document.getElementById(el).innerHTML;
    console.log(printcontent);
  	document.body.innerHTML =  printcontent;
  	window.print();
  	document.body.innerHTML = restorepage;
  }
</script>
@endsection
