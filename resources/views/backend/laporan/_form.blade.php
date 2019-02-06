<div class="form-group">
  {!! Form::label('nama_pemilik', 'Nama *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('nama_pemilik', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('no_bpkb', 'Nomor BPKB *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('no_bpkb', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>


<div class="form-group">
  {!! Form::label('no_pol', 'Nomor Polisi *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('no_pol', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>


<div class="form-group">
  {!! Form::label('no_surat_pengantar', 'Nomor Surat Pengantar *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('no_surat_pengantar', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>


<div class="form-group">
  {!! Form::label('id_jenis', 'Jenis *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::select('id_jenis', $jenis, null, ['class' => 'js-example-basic-single form-control']) !!}
  </div>
</div>


<div class="form-group">
  {!! Form::label('merek_type', 'Merek / Type *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('merek_type', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
  <button type="button" name="button" class="btn btn-primary"> <i class="fa fa-exchange"></i> </button>
</div>


<div class="form-group">
  {!! Form::label('tahun_pembuatan', 'Tahun Pembuatan *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('tahun_pembuatan', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>


<div class="form-group">
  {!! Form::label('tahun_perakitan', 'Tahun Perakitan *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::text('tahun_perakitan', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
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
  {!! Form::label('tanggal_surat', 'Tanggal Surat *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::date('tanggal_surat', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('tanggal_kehilangan', 'Tanggal Kehilangan *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::date('tanggal_kehilangan', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>


<div class="form-group">
  {!! Form::label('alamat', 'Alamat *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::textarea('alamat', null, ['class' => 'form-control','class'=>'form-control col-md-7 col-xs-12']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('ttd_id', 'Penanda Tangan *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
  <div class="col-md-6 col-sm-6 col-xs-12">
    {!! Form::select('ttd_id', $ttd, null, ['class' => 'js-example-basic-single form-control']) !!}
  </div>
</div>
