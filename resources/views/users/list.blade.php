@extends('admin.main')
@section('content')
<!-- Main content -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Manehmos users</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered table-sm table-hover table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Phone #</th>
                    <th>Email</th>
                    {{-- <th>Status</th> --}}
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $detail)
                <tr>
                    <td>{{ $detail->name }}</td>
                    <td>{{ $detail->position }}</td>
                    <td>{{ $detail->phone_no }}</td>
                    <td>{{ $detail->email }}</td>
                    {{-- <td>{{ $detail->status }}</td> --}}
                    <td>
                        <a href="{{ route('users.edit', ['user' => $detail]) }}" class="btn btn-sm btn-warning col-sm-12 col-xs-5 btn-margin">
                            Change password </a>
                    </td>
                    <td>
                        <form class="row" method="POST" action="{{ route('users.delete', ['user' => $detail]) }}" onsubmit="return confirm('Are you sure you want to deactivate?')">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger col-sm-offset-2">
                                {{ $detail->status == 'active'?'Deactivate':'Activate' }}
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" align="center">
                        <h3>No user added yet</h3>
                    </td>
                </tr>
                @endforelse
            </tbody>


            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Pnone #</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
</div>
@endsection
