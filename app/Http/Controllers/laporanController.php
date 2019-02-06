<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\laporan;
use App\ttd;
use App\jenis;

class laporanController extends Controller
{
    public function index(Request $request)
    {
        try {
          $laporans = laporan::all();
          return view('backend.laporan.index',compact('laporans'));
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
          'no_bpkb' => 'required|unique:laporan,no_bpkb',
          'no_pol' => 'required|unique:laporan,no_bpkb',
          'no_surat_pengantar' => 'required|unique:laporan,no_surat_pengantar',
          'merek_type' => 'required',
          'tahun_pembuatan' => 'required',
          'tahun_perakitan' => 'required',
          'warna' => 'required',
          'no_mesin' => 'required|unique:laporan,no_mesin',
          'no_rangka' => 'required|unique:laporan,no_rangka',
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
          return redirect()->route('laporan.index');
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
          return redirect()->route('user.index',['laporan='.$id]);
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
          'no_bpkb' => 'required|unique:laporan,no_bpkb,'.$id,
          'no_pol' => 'required|unique:laporan,no_bpkb,'.$id,
          'no_surat_pengantar' => 'required|unique:laporan,no_surat_pengantar,'.$id,
          'merek_type' => 'required',
          'tahun_pembuatan' => 'required',
          'tahun_perakitan' => 'required',
          'warna' => 'required',
          'no_mesin' => 'required|unique:laporan,no_mesin,'.$id,
          'no_rangka' => 'required|unique:laporan,no_rangka,'.$id,
          'id_jenis' => 'required',
          'tanggal_surat' => 'required',
          'tanggal_kehilangan' => 'required',
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
          $laporan->tanggal_surat = date('Y-m-d', strtotime($request->tanggal_surat));
          $laporan->tanggal_kehilangan = date('Y-m-d', strtotime($request->tanggal_kehilangan));;
          $laporan->nama_pemilik = $request->nama_pemilik;
          $laporan->alamat = $request->alamat;
          $laporan->ttd_id = $request->ttd_id;
          $laporan->update();
          toast()->success('Berhasil Mengupdate Pangkat', 'Berhasil');
          return redirect()->route('laporan.index');
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
          return redirect()->route('laporan.index');
          toast()->success('Berhasil Menghapus Pangkat', 'Berhasil');
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }
}
