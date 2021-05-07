@include('admin.head')

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>Mm</b>2</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Manehmos</b>2</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#">
                                <h4>MATERNAL AND NEWBORN HEALTH MONITORING SYSTEM (Manehmos)</h4>
                            </a>
                        </li>
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="{{ asset('/imgs/emma.png')}}" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have {{ $tasks = App\Models\Tasks::count() }} tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    @if ($tasks)
                                    <ul class="menu">
                                        @foreach (App\Models\Tasks::get()->take(3) as $task)
                                        <li>
                                            <!-- Task item -->
                                            <a href="{{ route('tasks.show',['id'=>$task->id]) }}">
                                                <h3>
                                                    {{ $task->name }}
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        @endforeach
                                        <!-- end task item -->
                                    </ul>
                                    @endif

                                </li>
                                <li class="footer">
                                    <a href="{{ route('tasks.list') }}">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('/imgs/emma.png')}}" class="user-image" alt="User Image">
                                <span class="hidden-xs">{{ Str::before(auth()->user()->name,' ') }}</span>
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
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            @include('components.admin-sidebar')
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Blank page
                    <small>it all starts here</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Examples</a></li>
                    <li class="active">Blank page</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.2.0
            </div>
            <strong>Copyright &copy; 2018-{{ date('Y') }} Manehmos2.</strong> All rights
            reserved.
        </footer>
    </div>

    <!-- jQuery 3 -->
    <script src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- datepicker -->
    <script src="{{ asset('plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- toastr -->
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

    <!-- Slimscroll -->
    <script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script type="text/javascript">
        $('#calendar').datepicker();

        $(function() {
            if ("<?php echo(Session::has('success')) ?>") {
                toastr.success("{{ Session::get('success') }}", "Success")
            } else if ("<?php echo(Session::has('warning')) ?>") {
                toastr.warning("{{ Session::get('warning') }}", "Warning")
            } else if ("<?php echo(Session::has('error')) ?>") {
                toastr.error("{{ Session::get('error') }}", "Error")
            }
        })

    </script>
</body>

</html>
