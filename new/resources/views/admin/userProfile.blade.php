@extends('admin.main') 
@section('content')


<!-- Main content -->
<section class="content">
    <div class="col-xs-5">
      <div class="box col-xs-5">
        <div class="box-header">
          <h3 class="box-title">Profile of {{$profile->name}}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body bg-aqua-active">
          <label for="name" style="font-size: 200%; font-style: italic"><i class="fa fa-user"></i> {{$profile->name}}</label><br>
          <label for="name" style="font-size: 150%; font-style: italic">Is a {{$profile->position}} at {{$profile->district}} District</label><br>
          <label for="name" style="font-size: 150%; font-style: italic"><i class="fa fa-id-card"></i> {{$profile->worker_id}}</label><br>
          <label for="name" style="font-size: 150%; font-style: italic"><i class="fa fa-phone"></i> {{$profile->phone_no}}</label><br>
          <label for="name" style="font-size: 150%; font-style: italic"><i class="fa fa-envelope"></i> {{$profile->email}}</label>
        </div>
        <!-- /.box-body -->
        <div class="box-footer"></div>
      </div>
      <!-- /.box -->
    </div>
</section>
@endsection