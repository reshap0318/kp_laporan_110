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
  Cetak Laporan {{$bpkb->nama_pemilik}}
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
    <h2>Cetak Laporan {{$bpkb->nama_pemilik}}</h2>
    <ul class="nav navbar-right panel_toolbox">
      <a onclick="printContent('cetak')" class="btn btn-success">Cetak Laporan</a>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content" id="cetak" style="color:black;">
    <div class="row">
      <div class="col-md-4 text-center">
        <table>
          <tr>
            <td>
            <p style="font-size:1.1em;">KEPOLISIAN NEGARA REPUBLIK INDONESIA
            <br>
            DAERAH SUMATERA BARAT <br>
            DIREKTORAT RESOURCE KRIMINAL UMUM</p></td>
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
          <img src="{{asset('img/polri.jpg')}}" alt="" style="width:60px">
          <h4 style="color:black;padding-bottom:-0px;margin-bottom:-20px;">SURAT KETERANGAN</h4>
          <hr style="height:1px;border:none;color:#333;background-color:#333;width:360px;border-bottom:1px solid #333;margin-bottom:-0px" />
          <p style="font-size:1.1em;">Nomor : SKET/&emsp;&emsp;/{{roma(Carbon\Carbon::now()->format('m'))}}/Res.1.24/{{Carbon\Carbon::now()->format('Y')}}/Ditrireskrimum</p>
      </div>
    </div>
    <br>
    <div class="row" style="font-size:1em">
      <table border="0" style="margin-left:0px; margin-right:10px">
        <tbody>
          <tr>
            <td valign="top" style="width:50px;text-align:center">1</td>
            <td style="text-align:justify;">Kepala Kepolisian Daerah Sumatera Barat dengan ini menerangkan Bahwa : <br>
              D a s a r <br><br>
              <table>
                <tr>
                  <td valign="top" style="width:20px">a. </td>
                  <td>Undang-undang No. 2 Tahun 2002 Tentang Kepolisian Negara Republik INDONESIA.</td>
                </tr>
                <tr>
                  <td valign="top" style="width:20px">b. </td>
                  <td>Telegram Kapolri No. Pol : T/352/1984 tanggal 6 april 1984 tentang kasus pidana dalam hubungan dengan Asuransi dan pejabat yang memberikan surat keterangan.</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td> <br> </td>
            <td> <br> </td>
          </tr>
          <tr>
            <td valign="top" style="width:50px;text-align:center">2</td>
            <td>Pertimbangan : <br><br>
              <table style="text-align:justify;">
                <tr>
                  <td valign="top" style="width:20px">a. </td>
                  <td>Laporan Polisi dari Sektor {{$bpkb->sektor}} Nomor : {{$bpkb->no_sektor}} tanggal {{$bpkb->tgl_sektor->format('d F Y')}}.</td>
                </tr>
                <tr>
                  <td valign="top" style="width:20px">b. </td>
                  <td>Surat Keterangan dari {{$bpkb->ket_dari}} Nomor : {{$bpkb->no_ket}} tanggal {{$bpkb->tgl_ket->format('d F Y')}}.</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td> <br> </td>
            <td> <br> </td>
          </tr>
          <tr>
            <td valign="top" style="width:50px;text-align:center">3</td>
            <td>
              <table style="text-align:justify;">
                <tr>
                  <td valign="top" style="width:200px">Jenis Kendaraan </td>
                  <td style="width:20px"> : </td>
                  <td>{{$bpkb->jenis->nama}}</td>
                </tr>
                <tr>
                  <td valign="top" style="width:200px">Merk/Type/Warna/Tahun</td>
                  <td style="width:20px"> : </td>
                  <td>{{$bpkb->merek}}/{{$bpkb->type}}/{{$bpkb->warna}}/{{$bpkb->tahun}}</td>
                </tr>
                <tr>
                  <td valign="top" style="width:200px">No. Rangka / No. Mesin </td>
                  <td style="width:20px"> : </td>
                  <td>{{$bpkb->no_rangka}}\{{$bpkb->no_mesin}}</td>
                </tr>
                <tr>
                  <td valign="top" style="width:200px">No. Polisi </td>
                  <td style="width:20px"> : </td>
                  <td>{{$bpkb->no_pol}}</td>
                </tr>
                <tr>
                  <td valign="top" style="width:200px">Atas Nama Pemilik/BPKB </td>
                  <td style="width:20px"> : </td>
                  <td>{{$bpkb->nama_pemilik}}</td>
                </tr>
                <tr>
                  <td valign="top" style="width:200px">Tempat Kejadian Perkara</td>
                  <td style="width:20px"> : </td>
                  <td>{{$bpkb->lks_hlg}}</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td> <br> </td>
            <td> <br> </td>
          </tr>
          <tr>
            <td valign="top" style="width:50px;text-align:center">4</td>
            <td style="text-align:justify;">Kesimpulan : <br><br>
              Berdsarkan Hasil Pemeriksaan yang dilakukan terhadap saksi dan Pemeriksaan Tempat Kejadian Perkara Serta adanya petunjuk lain, maka disimpulkan bahwa benar pada hari {{$bpkb->tgl_hlg->format('d F M')}}, sekira pukul {{$bpkb->wkt_hlg}} WIB, {{$bpkb->lks_hlg}} telah terjadi {{$bpkb->kejadian}} MEREK {{$bpkb->merek}} Warna {{$bpkb->warna}} tahun {{$bpkb->tahun}} No. Pol {{$bpkb->no_pol}} dengan Identitas sebagai mana tersebut diatas yang dilakukan oleh orang yang tidak dikenal.
            </td>
          </tr>
          <tr>
            <td> <br> </td>
            <td> <br> </td>
          </tr>
          <tr>
            <td valign="top" style="width:50px;text-align:center">5</td>
            <td style="text-align:justify;">Tidak Lanjut : dilakukan penyidikan terhadap pelaku dan barang bukti apabila dikemudian hari terdapat kekeliruan dalam surat keterangan ini akan dilakukan pembetulan seperlunya.
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <br>
    <div class="row">
      <div align="right" style="font-size:1.1em">
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
                <br><br>
                <div style="text-align:center">
                  {{$bpkb->ttd->nama}}
                  <div style="border-bottom:2px solid #333;"></div><br>
                  <p style="margin-top:-20px">{{$bpkb->ttd->jabatan}}&emsp;NIP. {{$bpkb->ttd->nrp}}12312121</p>
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
