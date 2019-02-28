<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporanBpkb extends Model
{
  protected $table = 'laporan_bpkb';

  protected $fillable = [
    'sektor',
    'no_sektor',
    'tgl_sektor',
    'ket_dari',
    'no_ket',
    'tgl_ket',
    'id_jenis',
    'merek',
    'warna',
    'tahun',
    'no_rangka',
    'no_mesin',
    'no_pol',
    'nama_pemilik',
    'type',
    'tgl_hlg',
    'wkt_hlg',
    'lks_hlg',
    'kejadian',
    'ttd_id',
  ];

  protected $casts = [
      'sektor' => 'string',
      'no_sektor' => 'string',
      'tgl_sektor' => 'date',
      'ket_dari' => 'string',
      'no_ket' => 'string',
      'tgl_ket' => 'date',
      'id_jenis' => 'integer',
      'merek' => 'string',
      'warna' => 'string',
      'tahun' => 'string',
      'no_rangka' => 'string',
      'no_mesin' => 'string',
      'no_pol' => 'string',
      'nama_pemilik' => 'string',
      'type' => 'string',
      'tgl_hlg' => 'date',
      'wkt_hlg' => 'time',
      'lks_hlg' => 'string',
      'kejadian' => 'string',
      'ttd_id' => 'integer',
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
