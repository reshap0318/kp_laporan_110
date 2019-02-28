<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\laporanBpkb as bpkb;
use App\jenis;
use App\ttd;
use DB;

class laporanBpkbController extends Controller
{
    public function index(Request $request)
    {
        try {
          return view('backend.bpkb.index');
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }

    }

    public function create(Request $request)
    {
        try {
          $jenis = jenis::pluck('nama','id');
          $ttd = ttd::pluck('nama','id');
          return view('backend.bpkb.create',compact('jenis','ttd'));
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'sektor' => 'required',
            'no_sektor' => 'required',
            'tgl_sektor' => 'required',
            'ket_dari' => 'required',
            'no_ket' => 'required',
            'tgl_ket' => 'required',
            'id_jenis' => 'required',
            'merek' => 'required',
            'warna' => 'required',
            'tahun' => 'required',
            'no_rangka' => 'required',
            'no_mesin' => 'required',
            'no_pol' => 'required',
            'nama_pemilik' => 'required',
            'type' => 'required',
            'tgl_hlg' => 'required',
            'wkt_hlg' => 'required',
            'lks_hlg' => 'required',
            'ttd_id' => 'required',
            'kejadian' => 'required',
        ]);
        try {
          $bpkb = new bpkb;
          $bpkb->type = $request->type;
          $bpkb->nama_pemilik = $request->nama_pemilik;
          $bpkb->sektor = $request->sektor;
          $bpkb->tgl_sektor = date('Y-m-d', strtotime($request->tgl_sektor));
          $bpkb->ket_dari = $request->ket_dari;
          $bpkb->no_ket = $request->no_ket;
          $bpkb->tgl_ket = date('Y-m-d', strtotime($request->Keteragan));
          $bpkb->id_jenis = $request->id_jenis;
          $bpkb->merek = $request->merek;
          $bpkb->warna = $request->warna;
          $bpkb->tahun = $request->tahun;
          $bpkb->no_rangka = $request->no_rangka;
          $bpkb->no_mesin = $request->no_mesin;
          $bpkb->no_pol = $request->no_pol;
          $bpkb->no_sektor = $request->no_sektor;
          $bpkb->tgl_hlg = date('Y-m-d', strtotime($request->tgl_hlg));;
          $bpkb->wkt_hlg = $request->wkt_hlg;
          $bpkb->lks_hlg = $request->lks_hlg;
          $bpkb->ttd_id = $request->ttd_id;
          $bpkb->kejadian = $request->kejadian;
          $bpkb->save();
          return redirect()->route('kendaraan.index');
         toast()->success('Berhasil Menyimpan Pangkat', 'Berhasil');
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }

    public function show($id,Request $request)
    {
        try {
          $bpkb = bpkb::find($id);
          return view('backend.bpkb.show',compact('bpkb'));
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }

    public function edit($id,Request $request)
    {
        try {
          $bpkb = bpkb::find($id);
          $jenis = jenis::pluck('nama','id');
          $ttd = ttd::pluck('nama','id');
          return view('backend.bpkb.edit',compact('bpkb','jenis','ttd'));
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }

    public function update($id,Request $request)
    {
        $request->validate([
            'sektor' => 'required',
            'no_sektor' => 'required',
            'tgl_sektor' => 'required',
            'ket_dari' => 'required',
            'no_ket' => 'required',
            'tgl_ket' => 'required',
            'id_jenis' => 'required',
            'merek' => 'required',
            'warna' => 'required',
            'tahun' => 'required',
            'no_rangka' => 'required',
            'no_mesin' => 'required',
            'no_pol' => 'required',
            'nama_pemilik' => 'required',
            'type' => 'required',
            'tgl_hlg' => 'required',
            'kejadian' => 'required',
            'wkt_hlg' => 'required',
            'lks_hlg' => 'required',
            'ttd_id' => 'required',
        ]);
        try {
          $bpkb = bpkb::find($id);
          $bpkb->type = $request->type;
          $bpkb->nama_pemilik = $request->nama_pemilik;
          $bpkb->sektor = $request->sektor;
          $bpkb->tgl_sektor = date('Y-m-d', strtotime($request->tgl_sektor));
          $bpkb->ket_dari = $request->ket_dari;
          $bpkb->no_ket = $request->no_ket;
          $bpkb->tgl_ket = $request->tgl_ket;
          $bpkb->id_jenis = $request->id_jenis;
          $bpkb->merek = $request->merek;
          $bpkb->warna = $request->warna;
          $bpkb->tahun = $request->tahun;
          $bpkb->no_rangka = $request->no_rangka;
          $bpkb->no_mesin = $request->no_mesin;
          $bpkb->no_pol = $request->no_pol;
          $bpkb->no_sektor = $request->no_sektor;
          $bpkb->tgl_hlg = date('Y-m-d', strtotime($request->tgl_hlg));;
          $bpkb->wkt_hlg = $request->wkt_hlg;
          $bpkb->lks_hlg = $request->lks_hlg;
          $bpkb->ttd_id = $request->ttd_id;
          $bpkb->kejadian = $request->kejadian;
          $bpkb->update();
          toast()->success('Berhasil Mengupdate Pangkat', 'Berhasil');
          return redirect()->route('kendaraan.index');
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }

    public function destroy($id,Request $request)
    {
        try {
          $bpkb = bpkb::find($id);
          $bpkb->delete();
          return redirect()->route('kendaraan.index');
          toast()->success('Berhasil Menghapus Pangkat', 'Berhasil');
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }

    public function kendaraanajax(Request $request)
    {
      $bpkb = bpkb::select('laporan_bpkb.*','jenis.nama as jenis',DB::RAW('DATE_FORMAT(laporan_bpkb.tgl_sektor, "%d %M %Y") as tgl'))->leftjoin('jenis','laporan_bpkb.id_jenis','=','jenis.id');
      if($request->awal && $request->akhir){
        $bpkb = bpkb::select('laporan_bpkb.*','jenis.nama as jenis',DB::RAW('DATE_FORMAT(laporan_bpkb.tgl_sektor, "%d %M %Y") as tgl'))->leftjoin('jenis','laporan_bpkb.id_jenis','=','jenis.id')->whereRAW("DATE_FORMAT(laporan_bpkb.tgl_sektor, '%Y%m%d') BETWEEN '$request->awal' AND '$request->akhir'");
      }
      $bpkb = $bpkb->orderby('laporan_bpkb.tgl_sektor','desc')->get();
      return '{"data" : '.json_encode($bpkb).'}';
    }
}
