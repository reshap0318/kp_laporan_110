<div class="form-group">
  {!! Form::label('nama_pemilik', 'Nama *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('nama_pemilik', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('no_pol', 'Nomor Polisi *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('no_pol', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>


<div class="form-group">
  {!! Form::label('id_jenis', 'Jenis *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::select('id_jenis', $jenis, null, ['class' => 'js-example-basic-single form-control']) !!}
  </div>
</div>


<div class="form-group">
  {!! Form::label('merek', 'Merek *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('merek', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>


<div class="form-group">
  {!! Form::label('type', 'Type *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('type', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>


<div class="form-group">
  {!! Form::label('tahun', 'Tahun Pembuatan *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('tahun', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>


<div class="form-group">
  {!! Form::label('warna', 'Warna *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('warna', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>


<div class="form-group">
  {!! Form::label('no_mesin', 'Nomor Mesin *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('no_mesin', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>


<div class="form-group">
  {!! Form::label('no_rangka', 'Nomor Rangka *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('no_rangka', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>


<div class="form-group">
  {!! Form::label('no_sektor', 'Nomor Surat Sektor *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('no_sektor', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('sektor', 'Sektor *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('sektor', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('tgl_sektor', 'Tanggal Sektor *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::date('tgl_sektor', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('no_ket', 'Nomor Surat Keterangan *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('no_ket', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('ket_dari', 'Keterangan Dari *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('ket_dari', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('tgl_ket', 'Tanggal Keteragan *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::date('tgl_ket', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('tgl_hlg', 'tanggal Hilang *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::date('tgl_hlg', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('kejadian', 'Kejadian *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('kejadian', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('wkt_hlg', 'Waktu Hilang *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::time('wkt_hlg', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('lks_hlg', 'Lokasi Hilang *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::textarea('lks_hlg', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('ttd_id', 'Penanda Tangan *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::select('ttd_id', $ttd, null, ['class' => 'js-example-basic-single form-control']) !!}
  </div>
</div>
