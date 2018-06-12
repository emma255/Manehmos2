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
            <form class="form-horizontal" action="/task/store" method="POST">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="task_name" class="col-sm-2 control-label">Task</label>

                        <div class="col-sm-10">
                            <input type="text" id="task_name" name="task_name" placeholder="Task name" class="form-control{{ $errors->has('task_name') ? ' is-invalid' : '' }}"
                                name="task_name"> @if ($errors->has('task_name'))
                            <span class="alert-danger">
                                <strong>{{ $errors->first('task_name') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="participant" class="col-sm-2 control-label">Participants</label>

                        <div class="col-sm-10">
                            <input type="text" id="participant" name="participant" placeholder="Participants" class="form-control{{ $errors->has('participant') ? ' is-invalid' : '' }}"
                                name="participant"> @if ($errors->has('participant'))
                            <span class="alert-danger">
                                <strong>{{ $errors->first('participant') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comments" class="col-sm-2 control-label">Comments</label>

                        <div class="col-sm-10">
                            <input type="text" id="comments" name="comments" placeholder="Comments" class="form-control{{ $errors->has('comments') ? ' is-invalid' : '' }}"
                                name="comments"> @if ($errors->has('comments'))
                            <span class="alert-danger">
                                <strong>{{ $errors->first('comments') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="start_date" class="col-sm-2 control-label">Start date</label>

                        <div class="col-sm-10">
                            <input type="date" id="start_date" name="start_date" class="form-control{{ $errors->has('start_date') ? ' is-invalid' : '' }}"
                                name="start_date"> @if ($errors->has('start_date'))
                            <span class="alert-danger">
                                <strong>{{ $errors->first('start_date') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="end_date" class="col-sm-2 control-label">End date</label>

                        <div class="col-sm-10">
                            <input type="date" id="end_date" name="end_date" class="form-control{{ $errors->has('end_date') ? ' is-invalid' : '' }}"
                                name="end_date"> @if ($errors->has('end_date'))
                            <span class="alert-danger">
                                <strong>{{ $errors->first('end_date') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">Save</button>
                    </div>
                    <!-- /.box-footer -->
            </form>
            </div>
</section>
@endsection