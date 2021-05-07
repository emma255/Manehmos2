<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('/imgs/emma.png')}}" class="img-circle" alt="User">
        </div>
        <div class="pull-left info">
            <p>{{ Str::before(auth()->user()->name,' ') }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="{{Request::is('admin/home')?'active':''}}">
            <a href="{{ route('home') }}">
                <i class="fa fa-th"></i> <span>Home</span>
            </a>
        </li>
        <!-- accounts -->
        <li class="treeview{{Request::is('accounts/*')?' active menu-open':''}}">
            <a href="#">
                <i class="fa fa-user-o"></i>
                <span>Accounts</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{Request::is('accounts/users/create')?' active':''}}">
                    <a href="{{ route('users.create') }}">
                        <i class="fa fa-user-plus"></i> Create account
                    </a>
                </li>
                <li class="{{Request::is('accounts/users/list')?' active':''}}">
                    <a href="{{ route('users.list')}}"><i class="fa fa-user-md"></i> View accounts</a>
                </li>
            </ul>
        </li>
        <!-- tasks -->
        <li class="treeview{{Request::is('tasks/*')?' active menu-open':''}}">
            <a href="#">
                <i class="fa fa-tasks"></i>
                <span>Tasks</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{Request::is('tasks/create')?'active':''}}">
                    <a href="{{ route('tasks.create') }}">
                        <i class="fa fa-circle-o"></i> Add tasks
                    </a>
                </li>
                <li class="{{Request::is('tasks/list')?'active':''}}">
                    <a href="{{ route('tasks.list') }}">
                        <i class="fa fa-circle-o"></i> View tasks
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</section>
