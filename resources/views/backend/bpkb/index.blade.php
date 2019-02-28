@extends('layouts.frontend')

@section('title')
  List Kehilangan Motor
@stop

@section('content')
<script type="text/javascript" src="{{ URL::asset('/gantela/vendors/daterangepick/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/gantela/vendors/daterangepick/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/gantela/vendors/daterangepick/daterangepicker.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/gantela/vendors/daterangepick/daterangepicker.css') }}" />
<div class="x_panel">
  <div class="x_title">
    <div class="col-md-6">
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend input-group">
            <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
            <input type="text" style="width: 200px" name="waktu" id="reportrange" class="form-control" value="01/20/2018 - 01/25/2018" />
          </div>
        </div>
      </div>
    </div>
    <ul class="nav navbar-right panel_toolbox">
      @if (Sentinel::getUser()->hasAccess(['kendaraan.create']))
        <a href="{{route('kendaraan.create')}}" class="btn btn-success">New List Kehilangan Motor</a>
      @endif
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <table class="table table-bordered table-striped table-hover" id="tblkendaraan" style="width:100%">
      <thead>
        <tr class="headings">
          <th>No</th>
          <th>No Surat Pengantar</th>
          <th>Nama</th>
          <th>Jenis Kendaraan</th>
          <th>Merek</th>
          <th>No Pol</th>
          <th>Tanggal</th>
          <th class="no-link last"><span class="nobr">Action</span></th>
        </tr>
      </thead>
    </table>
  </div>
</div>
{!! Form::open(['method'=>'DELETE', 'route' => ['kendaraan.destroy', 1], 'style' => 'display:inline','id'=>'deletef']) !!}
{!! Form::close() !!}
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        table = $('#tblkendaraan').DataTable({
            "ajax": "{{url('kendaraanajax')}}",
            "columns": [
                { "data": "no_ket" },
                { "data": "no_ket" },
                { "data": "nama_pemilik" },
                { "data": "jenis" },
                { "data": "merek" },
                { "data": "no_pol" },
                { "data": "tgl" },
                { defaultContent : ''+
                @if (Sentinel::getUser()->hasAccess(['kendaraan.show']))
                  '<a id="view" class="btn btn-success btn-xs">View</a>'+
                @endif
                @if (Sentinel::getUser()->hasAccess(['kendaraan.show']))
                  '<a id="edit" class="btn btn-success btn-xs">Edit</a>'+
                @endif
                @if (Sentinel::getUser()->hasAccess(['kendaraan.show']))
                  '<a id="delete" class="btn btn-danger btn-xs">Delete</a>'
                @endif}
            ],
            "order": [[ 1, "desc" ]],
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
                      columns: [0, 1, 2, 3, 4, 5, 6]
                  }
              },
              {
                  extend: 'print',
                  orientation: 'landscape',
                  pageSize: 'LEGAL',
                  exportOptions: {
                      columns: [0, 1, 2, 3, 4, 5, 6]
                  }
              },
              {
                  extend: 'csv',
                  text: 'Excel',
                  exportOptions: {
                      columns: [0, 1, 2, 3, 4, 5, 6]
                  }
              },
              {
                  extend: 'excel',
                  exportOptions: {
                      columns: [0, 1, 2, 3, 4, 5, 6]
                  }
              },
              {
                  extend: 'pdf',
                  exportOptions: {
                      columns: [0, 1, 2, 3, 4, 5, 6]
                  }
              }
            ]
          });
          $('#tblkendaraan tbody').on( 'click', '#edit', function () {
              var data = table.row( $(this).parents('tr') ).data();
              window.open("{{url('kendaraan')}}/"+data.id+"/edit","_self");
          } );

          $('#tblkendaraan tbody').on( 'click', '#view', function () {
              var data = table.row( $(this).parents('tr') ).data();
              window.open("{{url('kendaraan')}}/"+data.id,"_self");
          } );

          $('#tblkendaraan tbody').on( 'click', '#delete', function () {
              var data = table.row( $(this).parents('tr') ).data();
              var fdelete = document.getElementById('deletef');
              if(confirm("yakin Akan Menghapus List Kehilangan Motor Ini?")==true){
                fdelete.action = "{{url('kendaraan')}}/"+data.id;
                fdelete.submit();
              }
          } );

        table.on( 'order.dt search.dt', function () {
          table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
              cell.innerHTML = i+1;
          } );
        } ).draw();
    });

</script>

<script type="text/javascript">
  $(function() {

      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end) {

          table.ajax.url("{{url('kendaraanajax')}}?awal="+start.format('YYYYMMD')+"&akhir="+end.format('YYYYMMD')).load();
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
          console.log("{{url('kendaraanajax')}}?awal="+start.format('YYYYMMD')+"&akhir="+end.format('YYYYMMD'));
      }

      $('#reportrange').daterangepicker({
          startDate: start,
          endDate: end,
          ranges: {
             'Today': [moment(), moment()],
             'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
             'Last 30 Days': [moment().subtract(29, 'days'), moment()],
             'This Month': [moment().startOf('month'), moment().endOf('month')],
             'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          }
      }, cb);

      cb(start, end);

  });
</script>
@endsection
