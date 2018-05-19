@extends('admin.main') 
@section('content')
<!-- Main content -->

<section class="col-lg-7 connectedSortable">
  <!-- Custom tabs (Charts with tabs)-->


  <!-- quick email widget -->
  <div class="box box-info">
    <div class="box-header">
      <i class="fa fa-envelope"></i>

      <h3 class="box-title">Quick Email</h3>
      <!-- tools box -->
      <div class="pull-right box-tools">
        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
      </div>
      <!-- /. tools -->
    </div>
    <div class="box-body">
      <form action="#" method="post">
        <div class="form-group">
          <input type="email" class="form-control" name="emailto" placeholder="Email to:">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" placeholder="Subject">
        </div>
        <div>
          <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </div>
      </form>
    </div>
    <div class="box-footer clearfix">
      <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
    </div>
  </div>

</section>
<!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->
<section class="col-lg-5 connectedSortable">

  <!-- Calendar -->
  <div class="box box-solid bg-green-gradient">
    <div class="box-header">
      <i class="fa fa-calendar"></i>

      <h3 class="box-title">Calendar</h3>
      <!-- tools box -->
      <div class="pull-right box-tools">
        <!-- button with a dropdown -->
        <div class="btn-group">
          <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li><a href="#">Add new event</a></li>
            <li><a href="#">Clear events</a></li>
            <li class="divider"></li>
            <li><a href="#">View calendar</a></li>
          </ul>
        </div>
        <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
        <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
      </div>
      <!-- /. tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
      <!--The calendar -->
      <div id="calendar" style="width: 100%"></div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer text-black">
      <div class="row">
        <div class="col-sm-6">
          <!-- Progress bars -->
          <div class="clearfix">
            <span class="pull-left">Task #1</span>
            <small class="pull-right">90%</small>
          </div>
          <div class="progress xs">
            <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
  </div>
  <!-- /.box -->

</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->

</section>
@endsection