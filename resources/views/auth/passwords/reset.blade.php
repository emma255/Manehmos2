@extends('layouts.auth')

@section('content')

<div class="card-header pb-0 text-left bg-transparent">
    <h3 class="font-weight-bolder text-info text-gradient">Reset password</h3>
    <p class="mb-0">Enter new password to proceed</p>
</div>

<div class="card-body">
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mb-2">
            <label>E-mail address</label>
            <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" aria-label="email" aria-describedby="email-addon" value="{{ $email ??old('email') }}" required autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-2">
            <label>Password</label>
            <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-label="password" aria-describedby="password-addon" value="{{ old('password') }}" required autocomplete="password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-2">
            <label>Confirm password</label>
            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" aria-label="password" aria-describedby="password-addon" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="text-center">
            <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</div>
<div class="card-footer text-center pt-0 px-sm-4 px-1">
    <p class="mb-0 mx-auto">
        <a href="{{ route('login') }}" class="text-info text-gradient font-weight-bold">Back to login</a>
    </p>
</div>
@endsection
