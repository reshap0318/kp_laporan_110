<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{

  protected $table = 'laporan';

  protected $casts = [
        'no_bpkb' => 'string',
        'no_pol' => 'string',
        'no_surat_pengantar' => 'string',
        'merek_type' => 'string',
        'tahun_pembuatan' => 'integer',
        'tahun_perakitan' => 'integer',
        'warna' => 'string',
        'no_mesin' => 'string',
        'no_rangka' => 'string',
        'id_jenis' => 'integer',
        'tanggal_surat' => 'date',
        'tanggal_kehilangan' => 'date',
        'nama_pemilik' => 'string',
        'alamat' => 'text',
        'ttd_id' => 'integer',
    ];

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
