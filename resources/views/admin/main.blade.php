@include('admin.head')

<body class="">
  <div class="col-md-12 row bg-black" align="center">
    <h3>MATERNAL AND NEWBORN HEALTH MONITORING SYSTEM (Manehmos)</h3>
  </div>
  <div class="hold-transition skin-blue sidebar-mini col-md-12">
    <header class="main-header">
      <!-- Logo -->
      <a href="{{ asset('admin/home')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
          <b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
          <b>Admin</b>
        </span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="{{ asset('admin/home')}}" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <l class="nav navbar-nav">
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">
                  <?= $taskstotal=App\Tasks::count(); ?>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have
                  <?= $taskstotal; ?> tasks</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <!-- Task item -->
                    @foreach( $tasks = App\Tasks::take(3)->get() as $task)

                    <li>
                      <a href="#">
                        <h3>
                          {{$task->task_name}}
                          <small class="pull-right"></small>
                        </h3>
                      </a>
                    </li>

                    @endforeach
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="{{ asset('/showTasks')}}">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('/imgs/emma.png')}}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{Auth::user()->name}}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- Menu Body -->
                <li class="user-body">

                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
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
            <img src="{{ asset('/imgs/emma.png')}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{Auth::user()->name}}</p>
            <a href="{{ asset('admin/home')}}">
              <i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="{{ asset('/user/profile')}}" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="name" class="form-control" placeholder="Search user...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>

          <!-- accounts -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-user-o"></i>
              <span>Accounts</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="{{ route('register') }}">
                  <i class="fa fa-user-plus"></i> Create account</a>
              </li>
              <li>
                <a href="{{ asset('/showUsers')}}">
                  <i class="fa fa-user-md"></i> View accounts</a>
              </li>
            </ul>
          </li>


          <!-- tasks -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-tasks"></i>
              <span>Tasks</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="{{ asset('/task/create')}}">
                  <i class="fa fa-circle-o"></i> Add tasks</a>
              </li>
              <li>
                <a href="{{ asset('/showTasks')}}">
                  <i class="fa fa-circle-o"></i> View tasks</a>
              </li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
      @if (Session::has('flash_message'))

            <div class="alert alert-success text-capitalize text-center">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
            {{ Session::get('flash_message') }} {{Session::forget('flash_message')}}</div>

            @endif
      @yield('content')
    </div>
  </div>


  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>

  <!-- Bootstrap 3.3.7 -->
  <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

  <!-- Morris.js charts -->
  <script src="{{ asset('bower_components/raphael/raphael.min.js') }}"></script>
  <script src="{{ asset('bower_components/morris.js/morris.min.js') }}"></script>

  <!-- Sparkline -->
  <script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>

  <!-- jvectormap -->
  <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
  <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

  <!-- jQuery Knob Chart -->
  <script src="{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>

  <!-- daterangepicker -->
  <script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
  <script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>


  <!-- datepicker -->
  <script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

  <!-- Slimscroll -->
  <script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

  <!-- FastClick -->
  <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>

  <!-- AdminLTE App -->
  <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('dist/js/demo.js') }}"></script>
</body>

</html>