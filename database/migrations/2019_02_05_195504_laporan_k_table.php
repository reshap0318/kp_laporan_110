<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaporanKTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_bpkb');
            $table->string('no_pol');
            $table->string('no_surat_pengantar');
            $table->string('merek_type');
            $table->integer('tahun_pembuatan');
            $table->integer('tahun_perakitan');
            $table->string('warna');
            $table->string('no_mesin');
            $table->string('no_rangka');
            $table->integer('id_jenis')->unsigned();
            $table->date('tanggal_surat');
            $table->date('tanggal_kehilangan');
            $table->string('nama_pemilik');
            $table->text('alamat');
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
        Schema::drop('laporan');
    }
}
