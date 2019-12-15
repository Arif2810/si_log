<!-- Left side column. contains the logo and sidebar -->
<!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->

    <!-- search form -->
    <!-- /.search form -->

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="{{ url('/home') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="{{ route('employee.index') }}">
          <i class="fa fa-address-book"></i> <span> Data Karyawan</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>
      <li>
        <a href="{{ route('data.index') }}">
          <i class="glyphicon glyphicon-floppy-save"></i> <span>Data Quality Chip</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>

      <!-- yang hanya bisa diakses admin -->
      @if(Auth::user()->akses == 'admin')
      <li class="treeview">
        <a href="#">
          <i class="fa fa-database"></i> <span>Databases</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('agama.index') }}"><i class="fa fa-circle-o"></i> Agama</a></li>
          <li><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i> User</a></li>
          <li><a href="{{ route('gender.index') }}"><i class="fa fa-circle-o"></i> Gender</a></li>
          <li><a href="{{ route('machine.index') }}"><i class="fa fa-circle-o"></i>Mesin</a></li>
        </ul>
      </li>
      @endif

      <li>
        <a href="{{ url('/about') }}">
          <i class="glyphicon glyphicon-info-sign"></i> <span>About</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
