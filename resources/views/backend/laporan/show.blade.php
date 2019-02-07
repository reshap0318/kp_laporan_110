@extends('layouts.frontend')
@section('title')
  Cetak Laporan {{$laporan->no_surat_pengantar}}
@stop

@section('content')
<div class="x_panel">
  <div class="x_title">
    <h2>Cetak Laporan {{$laporan->no_surat_pengantar}}</h2>
    <ul class="nav navbar-right panel_toolbox">
      <a onclick="printContent('cetak')" class="btn btn-success">Cetak Laporan</a>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content" id="cetak" style="color:black;">
    <div class="row">
      <div class="col-md-4 text-center">
        <p style="font-size:1.2em;">KEPOLISIAN NEGARA REPUBLIK INDONESIA
        <br>
        DAERAH SUMATERA BARAT <br>
        DIREKTORAT RESOURCE KRIMINAL UMUM</p>
      </div>
    </div>
    <div class="row">
      <div class="text-center">
          <img src="{{asset('img/polri.jpg')}}" alt="">
          <h3 style="color:black;padding-bottom:-0px;margin-bottom:-20px">SURAT KETERANGAN</h3>
          <hr style="height:1px;border:none;color:#333;background-color:#333;width:300px;margin-bottom:-0px" />
          <p>Nomor : SKET/&emsp;/&emsp;/1/res.1.24/2019/Ditrireskrimum</p>
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
        <p style="font-size:1.2em;">Setelah dilakukan pengecekan sesuai dengan data yang ada pada kami ternyata BPKB kendaraan tersebut memang HILANG sesuai dengan Laporan Pengaduan Nomor : {{$laporan->no_surat_pengantar}}, Tanggal <font style="background:red">10 Januari 2019</font>, sebagaimana terlampir, dan Tidak tercantum dalam Daftar Pencarian Barang (DPB) yang merupakan Tindak Pidana.</p>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 col-md-offset-8">
        <div class="" style="font-size:1.2em;">
          <table style="width:100%">
            <thead>
              <th style="width:100px;vertical-align: top;"></th>
              <th style="width:20px;vertical-align: top;"></th>
              <th style="width:200px;"></th>
            </thead>
            <tbody>
              <tr>
                <td>Dikeluarkan di</td>
                <td style="text-align:center"> : </td>
                <td style="text-align:left">P a d a n g</td>
              </tr>
              <tr>
                <td>Pada Tanggal</td>
                <td style="text-align:center"> : </td>
                <td style="text-align:left">&emsp;&emsp;&emsp;-&emsp;&emsp;- 2019</td>
              </tr>
            </tbody>
          </table>
          <hr style="height:1px;border:none;color:#333;background-color:#333;width:280px;margin-top:-0px;margin-left:-0px" />
          <table style="width:75%">
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
          <div style="width:75%;text-align:center">
            {{$laporan->ttd->nama}}
            <hr style="height:1px;border:none;color:#333;background-color:#333;width:280px;margin-top:-0px;margin-left:-0px" />
            <p style="margin-top:-20px">PENATA I NIP. {{$laporan->ttd->nrp}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function printContent(el){
    var restorepage = document.body.innerHTML;
  	var printcontent = document.getElementById(el).innerHTML;
  	document.body.innerHTML = printcontent;
  	window.print();
  	document.body.innerHTML = restorepage;
  }
</script>
@endsection
