<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="shortcut icon" type="image/ico" href="{{asset('/images/icon.png')}}">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('lte/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('lte/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('lte/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('lte/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('lte/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{asset('lte/morris.css')}}">
  <link rel="stylesheet" href="{{asset('lte/jquery-jvectormap.css')}}">
  <link rel="stylesheet" href="{{asset('lte/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('lte/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('lte/bootstrap3-wysihtml5.min.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link href="{{asset('css/jquery.dataTables.css')}}" rel="stylesheet">
  <link href="{{asset('css/dataTables.bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('time/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>AI</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Aplikasi </b>Inventaris</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <ul class="dropdown-menu">
              
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <ul class="dropdown-menu">
              
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('images/avatar5.png')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="{{asset('images/avatar5.png')}}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }}
                  <small>Administrator</small>
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{ url('/logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out"></i>  Logout
                  </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                </form>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('images/avatar5.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li>
        <a href="{{route('staff.index')}}">
        <i class="fa fa-user-o"></i>
        <span>Staff</span>
        </a>
        </li>

        <li>
        <a href="{{route('kategori.index')}}">
        <i class="fa fa-server"></i>
        <span>Kategori</span>
        </a>
        </li>

        <li>
        <a href="{{route('tempat.index')}}">
        <i class="fa fa-map-marker"></i>
        <span>Tempat</span>
        </a>
        </li>

        <li>
        <a href="{{route('barang.index')}}">
        <i class="fa fa-briefcase"></i>
        <span>Barang</span>
        </a>
        </li>

        <li>
        <a href="{{route('barangmasuk.index')}}">
        <i class="fa fa-mail-reply"></i>
        <span>Barang Masuk</span>
        </a>
        </li>

        <li>
        <a href="{{route('penempatanbarang.index')}}">
        <i class="fa fa-mail-forward"></i>
        <span>Penempatan Barang</span>
        </a>
        </li>

        <li>
        <a href="{{route('penyesuaianstok.index')}}">
        <i class="fa fa-database"></i>
        <span>Penyesuaian Stok</span>
        </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
    </section>
    <br>
    @include('layouts._flash')
    @yield('content')
  </div>


  
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script src="{{asset('web/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('lte/jquery.min.js')}}"></script>
<script src="{{asset('lte/jquery-ui.min.js')}}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- <script src="{{asset('lte/bootstrap.min.js')}}"></script> -->
<script src="{{asset('lte/raphael.min.js')}}"></script>
<script src="{{asset('lte/morris.min.js')}}"></script>
<script src="{{asset('lte/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('lte/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('lte/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('lte/jquery.knob.min.js')}}"></script>
<script src="{{asset('lte/moment.min.js')}}"></script>
<script src="{{asset('lte/daterangepicker.js')}}"></script>
<script src="{{asset('lte/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('lte/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{asset('lte/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('lte/fastclick.js')}}"></script>
<script src="{{asset('lte/adminlte.min.js')}}"></script>
<script src="{{asset('lte/dashboard.js')}}"></script>
<script src="{{asset('lte/demo.js')}}"></script>

<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('time/js/bootstrap.min.js')}}"></script>
<script src="{{asset('time/js/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript">
  $(function () {
    $('#datetimepicker1').datetimepicker({
        format: 'YYYY-MM-DD h:m:s A',
      });
  });
</script>
@yield('scripts')
</body>
</html>
