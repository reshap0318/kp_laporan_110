@extends('layouts.frontend')

@section('title')
  Tanda Tangan
@stop

@section('content')
<div class="x_panel">
  <div class="x_title">
    <h2>List Tanda Tangan</h2>
    <ul class="nav navbar-right panel_toolbox">
      @if (Sentinel::getUser()->hasAccess(['tanda-tangan.create']))
        <a href="{{route('tanda-tangan.create')}}" class="btn btn-success">New Tanda Tangan</a>
      @endif
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
<table class="table table-bordered table-striped table-hover" id="tblttd">
  <thead>
    <tr class="headings">
      <th class="text-center">
        No
      </th>
      <th>NRP </th>
      <th>Nama </th>
      <th>Jabatan </th>
      <th class="no-link last"><span class="nobr">Action</span>
      </th>
      <th class="bulk-actions" colspan="7">
        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
      </th>
    </tr>
  </thead>
  <?php $no=0?>
  <tbody>
    @foreach($ttds as $ttd)
      <tr>
          <td class=" text-center">{{ ++$no }}</td>
          <td class=" ">{{$ttd->nrp}}</td>
          <td class=" ">{{$ttd->nama}}</td>
          <td class=" ">{{$ttd->jabatan}}</td>
          <td class=" last">
            @if (Sentinel::getUser()->hasAccess(['tanda-tangan.show']))
              <a href="{{route('tanda-tangan.show', $ttd->nama)}}" class="btn btn-success btn-xs">View</a>
            @endif
            @if (Sentinel::getUser()->hasAccess(['tanda-tangan.edit']))
              <a href="{{route('tanda-tangan.edit', $ttd->id)}}" class="btn btn-success btn-xs">edit</a>
            @endif
            @if (Sentinel::getUser()->hasAccess(['tanda-tangan.destroy']))
              {!! Form::open(['method'=>'DELETE', 'route' => ['tanda-tangan.destroy', $ttd->id], 'style' => 'display:inline']) !!}
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
        table = $('#tblttd').DataTable({
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
                  extend: 'print',
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
        return confirm("yakin Akan Menghapus Tanda Tangan Ini?");
    });

</script>
@endsection
