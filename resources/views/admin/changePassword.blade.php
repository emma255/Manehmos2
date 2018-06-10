@extends('admin.main') @section('content')


<!-- Main content -->
<section class="content">
    <div class="col-md-6">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Change password for {{$user->name}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {{--
            <form class="row" method="POST" action="/password/change"> --}}
                <form class="row" method="POST" action="{{ route('Admin.update', ['id' => $user->id]) }}" onsubmit="return confirm('Are you sure?')">
                    <input type="hidden" name="_method" value="PATCH"> @csrf

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-xs-offset-1 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                required> @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span> @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-xs-offset-1 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                name="password_confirmation" required> @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span> @endif
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 col-xs-offset-7">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Change Password') }}
                            </button>
                        </div>
                    </div>
                </form>
        </div>
</section>
@endsection