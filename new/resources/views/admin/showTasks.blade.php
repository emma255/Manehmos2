@extends('admin.main') 
@section('content')


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Admin tasks</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-hover table-striped">


                        <thead>
                            <tr>
                                <th>Task Name</th>
                                <th>Participants</th>
                                <th>Comments</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        @foreach ($tasks as $task)

                        <tbody>

                            <tr>
                                <td>{{$task->task_name}}</td>
                                <td>{{$task->participant}}</td>
                                <td>{{$task->comments}}</td>
                                <td>{{$task->start_date}}</td>
                                <td>{{$task->end_date}}</td>
                                <td>
                                    <form class="row" method="POST" action="{{ route('AdminTasks.destroy', ['id' => $task->id]) }}" onsubmit="return confirm('Are you sure?')">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" value="DELETE" class="btn btn-danger col-sm-offset-2">
                                    </form>
                                </td>
                            </tr>
                        </tbody>

                        @endforeach

                        <tfoot>
                            <tr>
                                <th>Task Name</th>
                                <th>Participants</th>
                                <th>Comments</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th></th>
                            </tr>
                        </tfoot>


                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection