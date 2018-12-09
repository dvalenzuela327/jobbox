<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Administración</title>
      
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      
      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
      
      <!-- Font Awesome -->
      <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
      
      <!-- Ionicons -->
      <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
      
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
      
      <!-- AdminLTE Skins. Choose a skin from the css/skins
               folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
          
      <!-- Morris chart -->
      <link rel="stylesheet" href="bower_components/morris.js/morris.css">
          
      <!-- jvectormap -->
      <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
          
      <!-- Date Picker -->
      <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
          
      <!-- Daterange picker -->
      <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
      
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        
          <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
          <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
          <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
        
      <!-- Google Font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        
  </head>
      <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
        
        <header class="main-header">
          <!-- Logo -->
          <a href="/admin2" class="logo">
          
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">Admin</span>
          
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Administración</span>
          </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Navegación</span>
              </a>
        
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs">Alexander Pierce</span>
                      </a>
                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        <p>
                          Alexander Pierce - Web Developer
                          <small>Member since Nov. 2012</small>
                        </p>
                      </li>
                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="#" class="btn btn-default btn-flat">Perfil</a>
                        </div>
                        <div class="pull-right">
                          <a href="#" class="btn btn-default btn-flat">Cerrar Sesión</a>
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
              <!-- Panel de usuario -->
              <div class="user-panel">
                <div class="pull-left image">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                  <p>Alexander Pierce</p>
                  
                </div>
              </div>
              <!-- /Fin del Panel de usuario -->

              <!-- Formulario buscar -->
              <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Buscar">
                  <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                      </span>
                </div>
              </form>
              <!-- /Fin del formulario buscar -->

              <!--  Menu: : El estilo puede ser enconrado a ala izquierda -->
              <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MENU PRINCIPAL</li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-server"></i> <span>Categoria</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Lista</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Registrar</a></li>
                  </ul>
                </li>  
                
                <li class="treeview">
                    <a href="#">
                      <i class="fa fa-servicestack"></i> <span>Servicios</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#"><i class="fa fa-circle-o"></i> Lista</a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i> Registrar</a></li>
                    </ul>
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
                <small>Panel de control</small>
              </h1>
              <ol class="breadcrumb">
                <li><a href="/admin"><i class="fa fa-home"></i>Inicio</a></li>
              </ol>
            </section>
        
           @yield('content')
    

          </div>
          <!-- /.content-wrapper -->
          <footer class="main-footer">
            <div class="pull-right hidden-xs">
              <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy;2018 <a href="https://team404.com">Team 404</a>.</strong> Todos los derechos reservados.          
          </footer>
        
        
               
        
            </div>
          </aside>
          <!-- /.control-sidebar -->
          <!-- Add the sidebar's background. This div must be placed
               immediately after the control sidebar -->
          <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        
        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="bower_components/raphael/raphael.min.js"></script>
        <script src="bower_components/morris.js/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="bower_components/moment/min/moment.min.js"></script>
        <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
  </body>
</html>