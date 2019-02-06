<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{

  protected $table = 'laporan';

  protected $fillable = [
    'no_bpkb',
    'no_pol',
    'no_surat_pengantar',
    'merek_type',
    'tahun_pembuatan',
    'tahun_perakitan',
    'warna',
    'no_mesin',
    'no_rangka',
    'id_jenis',
    'tanggal_surat',
    'tanggal_kehilangan',
    'nama_pemilik',
    'alamat',
    'ttd_id',
  ];

  public function ttd($value='')
  {
        return $this->hasOne(ttd::class,'id','ttd_id');
  }

  public function jenis($value='')
  {
        return $this->hasOne(jenis::class,'id','id_jenis');
  }

}
