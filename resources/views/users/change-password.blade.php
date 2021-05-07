@extends('admin.main')
@section('content')
<div class="col-md-6">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Change password for {{ $user->name }}</h3>
        </div>
        <div class="box-body">

            <form class="row" method="POST" action="{{ route('users.update', ['user' => $user]) }}" onsubmit="return confirm('Are you sure you want to change password?')">
                @csrf
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-xs-offset-1 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' has-error' : '' }}" name="password" required value="{{ old('password') }}">
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span> @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-xs-offset-1 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required value="{{ old('password_confirmation') }}"> @if ($errors->has('password_confirmation'))
                        <span class="help-block">
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
    </div>
</div>
@endsection
