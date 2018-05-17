@extends('admin.main') 
@section('content')


<!-- Main content -->
<section class="content">
    <div class="col-md-6">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Create task</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" href="/task/store" method="POST">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="task_name" class="col-sm-2 control-label">Task</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="task_name" name="task_name" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="participant" class="col-sm-2 control-label">Participants</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="participant" name="participant" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comments" class="col-sm-2 control-label">Comments</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="comments" name="comments" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="start_date" class="col-sm-2 control-label">Start date</label>

                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="end_date" class="col-sm-2 control-label">End date</label>

                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="end_date" name="end_date" placeholder="Password">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Sign in</button>
                    </div>
                    <!-- /.box-footer -->
            </form>
            </div>
</section>
@endsection