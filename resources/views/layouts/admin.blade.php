@include('layouts.sidebar')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IGSS | Mantenimiento</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- alertas -->
  <link rel="stylesheet" href="{{asset('dist/css/alertify.core.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/alertify.default.css')}}" id="toggleCSS" />


  <!-- datepicker -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
<!-- pace -->
  <link rel="stylesheet" href="{{asset('plugins/pace/pace.min.css')}}">
  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">

  <!-- fullCalendar -->
  <link rel="stylesheet" href="{{asset('bower_components/fullcalendar/dist/fullcalendar.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/fullcalendar/dist/fullcalendar.print.min.css')}}"
   media="print">

  <!-- RANGEPICKER -->
   <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">



  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('bower_components/jvectormap/jquery-jvectormap.css')}}">


  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/iCheck/all.css')}}">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>

<link rel="shortcut icon"   href="{{asset('login/images/igss.png')}}" /> 

</head>
<body class="hold-transition skin-green fixed sidebar-collapse sidebar-mini">
<div class="wrapper">

  <header class="main-header">
     
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>GSS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>IGSS</b> Mantenimiento

      </span>
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

          <!-- Notifications: style can be found in dropdown.less -->
          

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('dist/img/inge.png')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('dist/img/inge.png')}}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }}
                  <small>Instituto Guatemalteco de Seguridad Social</small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer ">

                <div class="pull-right">
                  <a href="{!! route('cerrar') !!}" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      @yield('sidebar')
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('contenido')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
    <div class="pull-right ">  
      <b>Version</b> 1.0.0 <br>
      <strong>All rights reserved.</strong><br>
      <strong>Copyright &copy; 2018 </strong>
    </div>
    
    <img  src="{{asset('login/images/logom.png')}}" width="50" height="50" >
    <strong  style=" padding-left: 25%">| Ronald Perez | José Bonilla | Andy Yee | Zedrick Rodríguez | Fredy Ramírez |</strong> 
    
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

</div>
<!-- ./wrapper -->
<!-- alertas -->
<script src="{{asset('dist/js/alertify.js')}}"></script>
<script src="{{asset('dist/js/alertify.min.js')}}"></script>

<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>



<script src="{{asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>


<!-- Full calendar -->
<script src="{{asset('bower_components/moment/moment.js')}}"></script>
<script src="{{asset('bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<script src="{{asset('bower_components/fullCalendar/dist/locale/es.js')}}"></script>
<script>
function reset () {
  $("#toggleCSS").attr("href", "{{asset('dist/css/alertify.default.css')}}");
  alertify.set({
    labels : {
      ok     : "OK",
      cancel : "Cancel"
    },
    delay : 5000,
    buttonReverse : false,
    buttonFocus   : "ok"
  });
}
</script>
@stack('scripts')


</body>
</html>
