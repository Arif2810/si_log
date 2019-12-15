<!DOCTYPE html>
<html>
<head>
	@include('templates.head')
	<title>Halaman About</title>
</head>
<body>

<section>
	<div class="container">
		<div class="row text-center">
			<h2>About</h2>
			<hr class="hr">
		</div>
		<div class="row">

		</div>
		<div class="row">
			<a href="{{ url('/') }}"> <button class="btn btn-primary btn-sm"><i class="#"></i>HOME</button></a>
		</div>
	</div>
</section>




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

</body>
</html>