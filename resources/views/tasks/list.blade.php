@extends('layouts.main2')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Authors table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                @if (count($tasks))
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0 table-bordered">
                        <thead>
                            <tr>
                                <th class="font-weight-bolder">Task</th>
                                <th class="font-weight-bolder">Participants</th>
                                <th class="font-weight-bolder">Comments</th>
                                <th class="font-weight-bolder">Start Date</th>
                                <th class="font-weight-bolder">End Date</th>
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
                                        <button type="submit" class="">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a href={{ route('tasks.edit',['id'=>$task->id]) }} type="submit" class="">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <h3 class="text-center">No task added yet</h3>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
