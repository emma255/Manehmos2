@extends('admin.main')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="col-md-8">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit task, {{ $task->name }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{ route('tasks.update',['id'=>$task->id]) }}" method="POST">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Task</label>
                        <div class="col-sm-10">
                            <input type="text" id="name" name="name" placeholder="Task name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $task->name }}">
                            @if ($errors->has('name'))
                            <span class="alert-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="start_date" class="col-sm-2 control-label">Start date</label>
                        <div class="col-sm-4">
                            <input type="date" id="start_date" name="start_date" class="form-control{{ $errors->has('start_date') ? ' is-invalid' : '' }}" name="start_date" value="{{ $task->start_date }}">
                            @if ($errors->has('start_date'))
                            <span class="alert-danger">
                                <strong>{{ $errors->first('start_date') }}</strong>
                            </span> @endif
                        </div>

                        <label for="end_date" class="col-sm-2 control-label">End date</label>
                        <div class="col-sm-4">
                            <input type="date" id="end_date" name="end_date" class="form-control{{ $errors->has('end_date') ? ' is-invalid' : '' }}" name="end_date" value="{{ $task->end_date }}">
                            @if ($errors->has('end_date'))
                            <span class="alert-danger">
                                <strong>{{ $errors->first('end_date') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comments" class="col-sm-2 control-label">Comments</label>

                        <div class="col-sm-10">
                            <input type="text" id="comments" name="comments" placeholder="Comments" class="form-control{{ $errors->has('comments') ? ' is-invalid' : '' }}" name="comments" value="{{ $task->comments }}"> @if ($errors->has('comments'))
                            <span class="alert-danger">
                                <strong>{{ $errors->first('comments') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="participant" class="col-sm-2 control-label">Participants</label>

                        <div class="col-sm-10">
                            <input type="text" id="participant" name="participant" placeholder="Participants" class="form-control{{ $errors->has('participant') ? ' is-invalid' : '' }}" name="participant" value="{{ $task->participant }}">
                            @if ($errors->has('participant'))
                            <span class="alert-danger">
                                <strong>{{ $errors->first('participant') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">Save changes</button>
                    </div>
                    <!-- /.box-footer -->
            </form>
        </div>
    </div>
</section>
@endsection
