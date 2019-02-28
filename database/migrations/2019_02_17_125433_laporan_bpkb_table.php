<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaporanBpkbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('laporan_bpkb', function (Blueprint $table) {
          $table->increments('id');
          $table->string('sektor');
          $table->string('no_sektor');
          $table->date('tgl_sektor');
          $table->string('ket_dari');
          $table->string('no_ket');
          $table->string('type');
          $table->date('tgl_ket');
          $table->integer('id_jenis')->unsigned();
          $table->string('merek');
          $table->string('warna');
          $table->string('tahun');
          $table->string('no_rangka');
          $table->string('no_mesin');
          $table->string('no_pol');
          $table->string('nama_pemilik');
          $table->date('tgl_hlg');
          $table->time('wkt_hlg');
          $table->string('lks_hlg');
          $table->string('kejadian');
          $table->integer('ttd_id')->unsigned();

          $table->foreign('id_jenis')->references('id')->on('jenis')->onUpdate('cascade');
          $table->foreign('ttd_id')->references('id')->on('ttd')->onUpdate('cascade');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('laporan_bpkb');
    }
}
