@extends('layouts.frontend')

@section('title')
  Jenis Kendaraan
@stop

@section('content')
<div class="x_panel">
  <div class="x_title">
    <h2>List Jenis Kendaraan</h2>
    <ul class="nav navbar-right panel_toolbox">
      @if (Sentinel::getUser()->hasAccess(['jenis-kendaraan.create']))
        <a href="{{route('jenis-kendaraan.create')}}" class="btn btn-success">New Jenis Kendaraan</a>
      @endif
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
<table class="table table-bordered table-striped table-hover" id="tbljenis">
  <thead>
    <tr class="headings">
      <th class="text-center">
        No
      </th>
      <th>Nama </th>
      <th class="no-link last"><span class="nobr">Action</span>
      </th>
      <th class="bulk-actions" colspan="7">
        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
      </th>
    </tr>
  </thead>
  <?php $no=0?>
  <tbody>
    @foreach($jeniss as $jenis)
      <tr>
          <td class=" text-center">{{ ++$no }}</td>
          <td class=" ">{{$jenis->nama}}</td>
          <td class=" last">
            @if (Sentinel::getUser()->hasAccess(['jenis-kendaraan.show']))
              <a href="{{route('jenis-kendaraan.show', $jenis->nama)}}" class="btn btn-success btn-xs">View</a>
            @endif
            @if (Sentinel::getUser()->hasAccess(['jenis-kendaraan.edit']))
              <a href="{{route('jenis-kendaraan.edit', $jenis->id)}}" class="btn btn-success btn-xs">edit</a>
            @endif
            @if (Sentinel::getUser()->hasAccess(['jenis-kendaraan.destroy']))
              {!! Form::open(['method'=>'DELETE', 'route' => ['jenis-kendaraan.destroy', $jenis->id], 'style' => 'display:inline']) !!}
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
        table = $('#tbljenis').DataTable({
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
        return confirm("yakin Akan Menghapus Jenis Kendaraan Ini?");
    });

</script>
@endsection
