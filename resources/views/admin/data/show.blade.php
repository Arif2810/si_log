<!DOCTYPE html>
<html>
<head>
	@include('templates.head')
  <title>Detail Data</title>
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
        Data Quality
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail data quality WP</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="{{ url('/data') }}"> <button class="btn btn-primary btn-sm"><i class="#"></i> Kembali</button></a>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col">
                    <p>Tanggal : {{ $data->tgl_input }} / Mesin : {{ $data->machines->nama_mesin }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <h4><b>Inputan</b></h4>
                    <p>Over Size : {{ $data->oversize_i }} gram</p>
                    <p>Over Thick : {{ $data->overthick_i }} gram</p>
                    <p>Large Accept : {{ $data->largeaccept_i }} gram</p>
                    <p>Small Accept : {{ $data->smallaccept_i }} gram</p>
                    <p>Pin : {{ $data->pin_i }} gram</p>
                    <p>Dust : {{ $data->dust_i }} gram</p>
                    <p>Bark : {{ $data->bark_i }} gram</p>
                    <p>inputed by : {!! $data->id_user !!}</p>
                  </div>

                  <div class="col-md-4">
                    <h4><b>Hasil</b></h4>
                    <p>Over Size : {{ $data->oversize }}%</p>
                    <p>Over Thick : {{ $data->overthick }}%</p>
                    <p>Large Accept : {{ $data->largeaccept }}%</p>
                    <p>Small Accept : {{ $data->smallaccept }}%</p>
                    <p>Total Accept : {{ $data->totalaccept }}%</p>
                    <p>Pin : {{ $data->pin }}%</p>
                    <p>Dust : {{ $data->dust }}%</p>
                    <p>Bark : {{ $data->bark }}%</p>
                  </div>
                </div>
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
</body>
</html>
