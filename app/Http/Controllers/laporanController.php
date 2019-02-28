<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\laporan;
use App\ttd;
use App\jenis;
use DB;

class laporanController extends Controller
{
    public function index(Request $request)
    {
        try {
          return view('backend.laporan.index');
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
          return view('backend.laporan.create',compact('jenis','ttd'));
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
          'no_bpkb' => 'required',
          'no_pol' => 'required',
          'no_surat_pengantar' => 'required',
          'merek_type' => 'required',
          'tahun_pembuatan' => 'required',
          'tahun_perakitan' => 'required',
          'warna' => 'required',
          'no_mesin' => 'required',
          'no_rangka' => 'required',
          'id_jenis' => 'required',
          'tanggal_surat' => 'required',
          'tanggal_kehilangan' => 'required',
          'nama_pemilik' => 'required',
          'alamat' => 'required',
          'ttd_id' => 'required',
        ]);
        try {
          $laporan = new laporan;
          $laporan->no_bpkb = $request->no_bpkb;
          $laporan->no_pol = $request->no_pol;
          $laporan->no_surat_pengantar = $request->no_surat_pengantar;
          $laporan->merek_type = $request->merek_type;
          $laporan->tahun_pembuatan = $request->tahun_pembuatan;
          $laporan->tahun_perakitan = $request->tahun_perakitan;
          $laporan->warna = $request->warna;
          $laporan->no_mesin = $request->no_mesin;
          $laporan->no_rangka = $request->no_rangka;
          $laporan->id_jenis = $request->id_jenis;
          $laporan->tanggal_surat = date('Y-m-d', strtotime($request->tanggal_surat));
          $laporan->tanggal_kehilangan = date('Y-m-d', strtotime($request->tanggal_kehilangan));;
          $laporan->nama_pemilik = $request->nama_pemilik;
          $laporan->alamat = $request->alamat;
          $laporan->ttd_id = $request->ttd_id;
          $laporan->save();
          return redirect()->route('bpkb.index');
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
          $laporan = laporan::find($id);
          return view('backend.laporan.show',compact('laporan'));
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }

    public function edit($id,Request $request)
    {
        try {
          $laporan = laporan::find($id);
          $jenis = jenis::pluck('nama','id');
          $ttd = ttd::pluck('nama','id');
          return view('backend.laporan.edit',compact('laporan','jenis','ttd'));
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }

    public function update($id,Request $request)
    {
        $request->validate([
          'no_bpkb' => 'required',
          'no_pol' => 'required',
          'no_surat_pengantar' => 'required',
          'merek_type' => 'required',
          'tahun_pembuatan' => 'required',
          'tahun_perakitan' => 'required',
          'warna' => 'required',
          'no_mesin' => 'required',
          'no_rangka' => 'required',
          'id_jenis' => 'required',
          'nama_pemilik' => 'required',
          'alamat' => 'required',
          'ttd_id' => 'required',
        ]);
        try {
          $laporan = laporan::find($id);
          $laporan->no_bpkb = $request->no_bpkb;
          $laporan->no_pol = $request->no_pol;
          $laporan->no_surat_pengantar = $request->no_surat_pengantar;
          $laporan->merek_type = $request->merek_type;
          $laporan->tahun_pembuatan = $request->tahun_pembuatan;
          $laporan->tahun_perakitan = $request->tahun_perakitan;
          $laporan->warna = $request->warna;
          $laporan->no_mesin = $request->no_mesin;
          $laporan->no_rangka = $request->no_rangka;
          $laporan->id_jenis = $request->id_jenis;
          if($request->tanggal_surat){
            $laporan->tanggal_surat = date('Y-m-d', strtotime($request->tanggal_surat));
          }
          if($request->tanggal_kehilangan){
            $laporan->tanggal_kehilangan = date('Y-m-d', strtotime($request->tanggal_kehilangan));
          }
          $laporan->nama_pemilik = $request->nama_pemilik;
          $laporan->alamat = $request->alamat;
          $laporan->ttd_id = $request->ttd_id;
          $laporan->update();
          toast()->success('Berhasil Mengupdate Kendaraan Hilang', 'Berhasil');
          return redirect()->route('bpkb.index');
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }

    public function destroy($id,Request $request)
    {
        try {
          $laporan = laporan::find($id);
          $laporan->delete();
          return redirect()->route('bpkb.index');
          toast()->success('Berhasil Menghapus Kendaraan Hilang', 'Berhasil');
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }

    public function dataajax(Request $request)
    {
        $laporans = laporan::select('laporan.*','jenis.nama as jenis',DB::RAW('DATE_FORMAT(laporan.tanggal_surat, "%d %M %Y") as tgl'))->leftjoin('jenis','laporan.id_jenis','=','jenis.id');
        if($request->awal && $request->akhir){
          $laporans = laporan::select('laporan.*','jenis.nama as jenis',DB::RAW('DATE_FORMAT(laporan.tanggal_surat, "%d %M %Y") as tgl'))->leftjoin('jenis','laporan.id_jenis','=','jenis.id')->whereRAW("DATE_FORMAT(laporan.tanggal_surat, '%Y%m%d') BETWEEN '$request->awal' AND '$request->akhir'");
        }
        $laporans = $laporans->orderby('laporan.tanggal_surat','desc')->get();
        return '{"data" : '.json_encode($laporans).'}';
    }
}
