<!DOCTYPE html>
<html>
<head>
  @include('templates.head')
  <title>Data Quality Chip</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    @include('templates.header')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    @include('templates.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Quallity Chip After Chipper
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="padding: 0 30px">
            <div class="box-header">
              <div class="box-header">
                <h5 class="box-title">Input Data</h5>
              </div>
              <div class="box-body">
                @include('admin/validation')
                <form action="{{ url('/data') }}" method="post">
                  <div class="row">
                    <div class="col-xs-2">
                      <input required="" class="form-control form-control-sm" type="date" name="tgl_input">
                    </div>

                    <div class="col-xs-2">
                      {{ Form::select('id_mesin', \App\Machine::pluck('nama_mesin', 'id_mesin'), NULL, ['class'=>'form-control']) }}
                    </div>

                    <div class="col-xs-2">
                      <input required="" class="form-control form-control-sm" type="text" name="oversize_i" placeholder="Over Size(gram) ...">
                    </div>
                    <div class="col-xs-2">
                      <input  class="form-control form-control-sm" type="text" name="overthick_i" placeholder="Over Thick(gram) ...">
                    </div>
                    <div class="col-xs-2">
                      <input required="" class="form-control form-control-sm" type="text" name="largeaccept_i" placeholder="Large Accept(gram) ...">
                    </div>
                    <div class="col-xs-2">
                      <input  class="form-control form-control-sm" type="text" name="smallaccept_i" placeholder="Small Accept(gram) ...">
                    </div>
                  </div>

                  <div class="row" style="margin-top: 10px;">
                    <div class="col-xs-2">
                      <input required="" class="form-control form-control-sm" type="text" name="pin_i" placeholder="Pin(gram) ...">
                    </div>
                    <div class="col-xs-2">
                      <input required="" class="form-control form-control-sm" type="text" name="dust_i" placeholder="Dust(gram) ...">
                    </div>
                    <div class="col-xs-2">
                      <input required="" class="form-control form-control-sm" type="text" name="bark_i" placeholder="Bark(gram) ...">
                    </div>
                  </div>

                  <div class="row" style="margin-top: 10px">
                    <div class="col-xs-2">
                      <input class="btn btn-primary" type="submit" name="exe" value="GO">
                      {{csrf_field()}}
                      <input type="reset" class="btn btn-danger" value="Reset">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
   
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="padding: 0 30px">
            <div class="box-header">
              <div class="box-header">
                <h3 class="box-title">Hasil</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                @include('admin/notification')
                <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <?php $no=1; ?>
                  <tr style="background-color: rgb(230, 230, 230);">
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Mesin</th>
                    <th>Over Size</th>
                    <th>Over Thick</th>
                    <th>Large Accept</th>
                    <th>Small Accept</th>
                    <th>Total Accept</th>
                    <th>Pin</th>
                    <th>Dust</th>
                    <th>Bark</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $data)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->tgl_input }}</td>
                    <td>{{ $data->machines->nama_mesin }}</td>
                    <td>{{ $data->oversize }}%</td>
                    <td>{{ $data->overthick }}%</td>
                    <td>{{ $data->largeaccept }}%</td>
                    <td>{{ $data->smallaccept }}%</td>
                    <td>{{ $data->totalaccept }}%</td>
                    <td>{{ $data->pin }}%</td>
                    <td>{{ $data->dust }}%</td>
                    <td>{{ $data->bark }}%</td>
                    <td>
                      <a href="data/{{$data->id_data}}/show"><button class="btn btn-primary btn-xs">Detail</button></a>
                      <button class="btn btn-danger btn-xs" data-delid={{$data->id_data}} data-toggle="modal" data-target="#delete"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                      
                    </td>
                  </tr>
                  @endforeach
                </tbody>

              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    @include('templates.control_sidebar')
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ url('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('assets/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('assets/dist/js/demo.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<!-- modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: rgb(200, 200, 200)">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span> 
        </button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('data.destroy', 'test')}}" method="post">
        {{method_field('delete')}}
        {{csrf_field()}}
        <div class="modal-body" style="background-color: rgb(230, 230, 230)">
          <p class="text-center">Apakah anda yakin akan menghapus ini?</p>
          <input type="hidden" name="id_data" id="del_id" value="">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Ya, hapus ini</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak, kembali</button>
        </div>
      </form>
    </div>
  </div>  
</div>
@include('templates.modal')
</body>
</html>
