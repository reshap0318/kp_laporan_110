@extends('layouts.frontend')

@section('title')
  Laporan
@stop

@section('content')
<div class="x_panel">
  <div class="x_title">
    <h2>List Laporan</h2>
    <ul class="nav navbar-right panel_toolbox">
      @if (Sentinel::getUser()->hasAccess(['laporan.create']))
        <a href="{{route('laporan.create')}}" class="btn btn-success">New Laporan</a>
      @endif
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
<table class="table table-bordered table-striped table-hover" id="tblLaporan">
  <thead>
    <tr class="headings">
      <th class="text-center">
        No
      </th>
      <th>No Surat Pengantar</th>
      <th>Nama</th>
      <th>Jenis Kendaraan</th>
      <th>Merek</th>
      <th>Tanggal</th>
      <th class="no-link last"><span class="nobr">Action</span>
      </th>
      <th class="bulk-actions" colspan="7">
        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
      </th>
    </tr>
  </thead>
  <?php $no=0?>
  <tbody>
    @foreach($laporans as $laporan)
      <tr>
          <td class=" text-center">{{ ++$no }}</td>
          <td class=" ">{{$laporan->no_surat_pengantar}}</td>
          <td class=" ">{{$laporan->nama_pemilik}}</td>
          <td class=" ">{{$laporan->jenis->nama}}</td>
          <td class=" ">{{$laporan->merek_type}}</td>
          <td class=" ">{{$laporan->tanggal_surat}}</td>
          <td class=" last">
            @if (Sentinel::getUser()->hasAccess(['laporan.show']))
              <a href="{{route('laporan.show', $laporan->id)}}" class="btn btn-success btn-xs">View</a>
            @endif
            @if (Sentinel::getUser()->hasAccess(['laporan.edit']))
              <a href="{{route('laporan.edit', $laporan->id)}}" class="btn btn-success btn-xs">edit</a>
            @endif
            @if (Sentinel::getUser()->hasAccess(['laporan.destroy']))
              {!! Form::open(['method'=>'DELETE', 'route' => ['laporan.destroy', $laporan->id], 'style' => 'display:inline']) !!}
              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs','id'=>'delete-confirm']) !!}
              {!! Form::close() !!}
            @endif
          </td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        table = $('#tblLaporan').DataTable({
            'columnDefs': [{
               'targets': 0,
               'searchable':false,
               'orderable':false,
            }],
            dom: 'Bfrtip',
            buttons: [
              {
                  extend: 'copy',
                  exportOptions: {
                      columns: [0, 1]
                  }
              },
              {
                  extend: 'csv',
                  exportOptions: {
                      columns: [0, 1]
                  }
              },
              {
                  extend: 'excel',
                  exportOptions: {
                      columns: [0, 1]
                  }
              },
              {
                  extend: 'pdf',
                  exportOptions: {
                      columns: [0, 1]
                  }
              }
            ]

          });
    });

  $("input#delete-confirm").on("click", function(){
        return confirm("yakin Akan Menghapus Laporan Ini?");
    });

</script>
@endsection
