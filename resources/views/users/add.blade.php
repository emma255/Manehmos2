@extends('admin.main')
@section('content')
<div class="col-md-8">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Create User Account</h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="box-body">
                <div class="form-group row">
                    <label for="name " class="col-sm-4 col-form-label text-right">{{ __('Full Name') }}</label>

                    <div class="col-sm-8 ">
                        <input id="name " type="text " class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus> @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span> @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="worker_id" class="col-sm-4 col-form-label text-right">{{ __('Worker ID') }}</label>

                    <div class="col-sm-8">
                        <input id="worker_id" type="text" class="form-control{{ $errors->has('worker_id') ? ' is-invalid' : '' }}" name="worker_id" value="{{ old('worker_id') }}" required autofocus> @if ($errors->has('worker_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('worker_id') }}</strong>
                        </span> @endif
                    </div>
                </div>


                <div class="form-group row">
                    <label for="position" class="col-sm-4 col-form-label text-right">{{ __('Position') }}</label>

                    <div class="col-sm-8">
                        <select id="position" name="position" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ old('position') }}" required autofocus>
                            <option value="" hidden=""></option>
                            <option value="Doctor">Doctor</option>
                            <option value="Clinical Attendant">Clinical Attendant</option>
                            <option value="System Administrator">System Administrator</option>
                        </select> @if ($errors->has('position'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('position') }}</strong>
                        </span> @endif
                    </div>
                </div>


                <div class="form-group row">
                    <label for="phone_no" class="col-sm-4 col-form-label text-right">{{ __('Phone no') }}</label>

                    <div class="col-sm-8">
                        <input id="phone_no" type="tel" class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}" name="phone_no" value="{{ old('phone_no') }}" required autofocus> @if ($errors->has('phone_no'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('phone_no') }}</strong>
                        </span> @endif
                    </div>
                </div>


                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label text-right">{{ __('Email') }}</label>

                    <div class="col-sm-8">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus> @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span> @endif
                    </div>
                </div>


                <div class="form-group row">
                    <label for="center" class="col-sm-4 col-form-label text-right">{{ __('Center Name') }}</label>

                    <div class="col-sm-8">
                        <input id="center" type="text" class="form-control{{ $errors->has('center') ? ' is-invalid' : '' }}" name="center" value="{{ old('center') }}" required autofocus> @if ($errors->has('center'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('center') }}</strong>
                        </span> @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="district" class="col-sm-4 col-form-label text-right">{{ __('District') }}</label>

                    <div class="col-sm-8">
                        <input id="district" type="text" class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" value="{{ old('district') }}" required autofocus> @if ($errors->has('district'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('district') }}</strong>
                        </span> @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label text-right">{{ __('Password') }}</label>

                    <div class="col-sm-8">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required> @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span> @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password-confirm" class="col-sm-4 col-form-label text-right">{{ __('Confirm Password') }}</label>

                    <div class="col-sm-8">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary col-sm-8 pull-right">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
