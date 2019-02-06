<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ttd;

class ttdController extends Controller
{
    public function index(Request $request)
    {
        try {
          $ttds = ttd::all();
          return view('backend.ttd.index',compact('ttds'));
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }

    }

    public function create(Request $request)
    {
        try {
          return view('backend.ttd.create');
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
          'nrp' => 'required|min:1|unique:ttd,nrp',
          'nama' => 'required',
          'jabatan' => 'required',
        ]);
        try {
          $ttd = new ttd;
          $ttd->nrp = $request->nrp;
          $ttd->nama = $request->nama;
          $ttd->jabatan = $request->jabatan;
          $ttd->save();
          return redirect()->route('tanda-tangan.index');
         toast()->success('Berhasil Menyimpan Tanda Tangan', 'Berhasil');
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }

    public function show($id,Request $request)
    {
        try {
          return redirect()->route('user.index',['ttd='.$id]);
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }

    public function edit($id,Request $request)
    {
        try {
          $ttd = ttd::find($id);
          return view('backend.ttd.edit',compact('ttd'));
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }

    public function update($id,Request $request)
    {
        $request->validate([
          'nrp' => 'required|min:1|unique:ttd,nrp,'.$id,
          'nama' => 'required',
          'jabatan' => 'required',
        ]);
        try {
          $ttd = ttd::find($id);
          $ttd->nrp = $request->nrp;
          $ttd->nama = $request->nama;
          $ttd->jabatan = $request->jabatan;
          $ttd->update();
          toast()->success('Berhasil Mengupdate Tanda Tangan', 'Berhasil');
          return redirect()->route('tanda-tangan.index');
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }

    public function destroy($id,Request $request)
    {
        try {
          $ttd = ttd::find($id);
          $ttd->delete();
          return redirect()->route('tanda-tangan.index');
          toast()->success('Berhasil Menghapus Tanda Tangan', 'Berhasil');
        } catch (\Exception $e) {
          toast()->error($e->getMessage(), 'Eror');
          toast()->error('Terjadi Eror Saat Meng-Load Data', 'Gagal');
          return redirect()->back();
        }
    }
}
