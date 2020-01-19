<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/ico" />

    <title>SISFODASIS</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('assets/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-google-wallet"></i><span> SISFODASIS</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('assets/images/pro.jpg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Indra Zandi</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Dashboard</h3>
                <ul class="nav side-menu">
                  <li><a href="/dasis"><i class="fa fa-mortar-board"></i> Data Siswa</a></li>
                  <li><a href="/dakel"><i class="fa fa-home"></i> Data Kelas</a></li>
                  <li><a href="/dagur"><i class="fa fa-users"></i> Data Guru</a></li>
                  <li><a href="/dapel"><i class="fa fa-book"></i> Data Pelajaran</a></li>
                  <li><a href="/danilai"><i class="fa fa-bar-chart"></i> Data Nilai</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Indra Zandi
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12 col-sm-12">
                <h3>SISFODASIS <small>Sistem Informasi Data Siswa</small></h3>
              </div>
          </div>
          <!-- top tiles -->
          <div class="row">
            <div class="col-md-12 col-sm-12">
            <div class="tile_count">
              <div class="col-xl-4 col-md-2">
                <div class="tile-stats">
                  <span class="count_top"><h2 align="center">Total Siswa</h2></span>
                  <div class="count green col" align="center">
                    2,500
                    <i class="fa fa-mortar-board center"></i>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-2">
                <div class="tile-stats">
                  <span class="count_top"><h2 align="center">Rerata Nilai</h2></span>
                  <div class="count green col" align="center">
                    2,500
                    <i class="fa fa-bar-chart"></i>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-2">
                <div class="tile-stats">
                  <span class="count_top"><h2 align="center">Total Mapel</h2></span>
                  <div class="count green col" align="center">
                    2,500
                    <i class="fa fa-book"></i>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-2">
                <div class="tile-stats">
                  <span class="count_top"><h2 align="center">Total Kelas</h2></span>
                  <div class="count green col" align="center">
                    2,500
                    <i class="fa fa-home"></i>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-2">
              </div>
              <div class="col-xl-4 col-md-2">
                <div class="tile-stats">
                  <span class="count_top"><h2 align="center">Total Guru</h2></span>
                  <div class="count green col" align="center">
                    2,500
                    <i class="fa fa-users"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          </div>
          <br />
          <div class="row">
            <div class="col-md-12 col-sm-12">
                @yield('content')
            </div>
          </div>
        </div>
      </div>
    <!-- jQuery -->
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('assets/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('assets/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('assets/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('assets/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('assets/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('assets/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
  </body>
</html>
