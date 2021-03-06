@extends('admin.main') 
@section('content')


<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Manehmos users</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered table-responsive table-hover table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Phone #</th>
                <th>Email</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            @foreach ($details as $detail)
            <tbody>
              <tr>
                <td>{{$detail->name}}</td>
                <td>{{$detail->position}}</td>
                <td>{{$detail->phone_no}}</td>
                <td>{{$detail->email}}</td>
                <td>{{$detail->status}}</td>
                <form class="row" method="POST" action="{{ route('Admin.destroy', ['id' => $detail->id]) }}" onsubmit="return confirm('Are you sure you want to deactivate?')">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}"> @if ($detail->name != Auth::user()->username)
                  <td class="col-md-1">
                    <a href="{{ route('Admin.edit', ['id' => $detail->id]) }}" class="btn btn-warning col-sm-12 col-xs-5 btn-margin">
                      Change password </a>
                  </td>
                  <td>
                    @if($detail->status == 'Deactivated')
                    <a href="{{ route('Admin.show', ['id' => $detail->id]) }}" class="btn btn-success col-sm-offset-2" onclick="return confirm('Are you sure you want to activate?')">Activate </a>                    @endif @if($detail->status == 'active')
                    <input type="submit" value="Deactivate" class="btn btn-danger col-sm-offset-2"> @endif

                  </td>
                  @endif
                </form>
              </tr>
            </tbody>

            @endforeach

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
      <!-- /.box -->
    </div>
  </div>
</section>
@endsection