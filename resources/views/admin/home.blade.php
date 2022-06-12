@extends('admin.main')
@section('content')
<div class="col-md-12 row">
    <div class="col-md-6">
        <div class="box box-solid bg-green-gradient">
            <div class="box-header">
                <i class="fa fa-calendar"></i>
                <h3 class="box-title">Calendar</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bars"></i></button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="{{ route('tasks.create') }}">Add new event</a></li>
                            <li><a href="{{ route('tasks.list') }}">List events</a></li>
                            <li class="divider"></li>
                            {{-- <li><a href="#">View calendar</a></li> --}}
                        </ul>
                    </div>
                    <button type="button" class="btn btn-success btn-sm" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-widget="remove">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Progress bars -->
                        <div class="clearfix">
                        </div>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
</div>
@endsection
