@extends('admin.main')
@section('content')


<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Admin tasks</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-hover table-sm table-striped">
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Participants</th>
                        <th>Comments</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{$task->name}}</td>
                        <td>{{$task->participant}}</td>
                        <td>{{$task->comments}}</td>
                        <td>{{$task->start_date}}</td>
                        <td>{{$task->end_date}}</td>
                        <td>
                            <form class="row" method="POST" action="{{ route('tasks.delete', ['id' => $task->id]) }}" onsubmit="return confirm('Are you sure?')">

                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                        <td>

                            <a href={{ route('tasks.edit',['id'=>$task->id]) }} type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <th>Task</th>
                        <th>Participants</th>
                        <th>Comments</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>


            </table>
        </div>
        <!-- /.box-body -->
    </div>
</section>
@endsection
