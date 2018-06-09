@extends('admin.main') @section('content')


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
          <table class="table table-bordered table-hover table-striped">


            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Pnone number</th>
                <th>Email</th>
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
                <form class="row" method="POST" action="{{ route('Admin.destroy', ['id' => $detail->id]) }}" onsubmit="return confirm('Are you sure?')">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}"> @if ($detail->name != Auth::user()->username)
                  <td>
                    <a href="{{ route('Admin.edit', ['id' => $detail->id]) }}" class="btn btn-warning col-sm-3 col-xs-5 btn-margin">
                      Update </a>
                  </td>
                  <td>
                    <input type="submit" value="DELETE" class="btn btn-danger col-sm-offset-2">
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
                <th>Pnone number</th>
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