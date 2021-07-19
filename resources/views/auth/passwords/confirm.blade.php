@extends('layouts.auth')

@section('content')

<div class="card-header pb-0 text-left bg-transparent">
    <h3 class="font-weight-bolder text-info text-gradient">Confirm Password</h3>
    <p class="mb-0">Please confirm your password before continuing.</p>
</div>

<div class="card-body">
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="mb-2">
            <label>Password</label>
            <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-label="password" aria-describedby="password-addon" value="{{ old('password') }}" required autocomplete="current.password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0">
                {{ __('Confirm Password') }}
            </button>
        </div>
    </form>
</div>
@if (Route::has('password.request'))
<div class="card-footer text-center pt-0 px-sm-4 px-1">
    <p class="mb-0 mx-auto">
        Forgot password?
        <a href="{{ route('password.request') }}" class="text-info text-gradient font-weight-bold">Reset it</a>
    </p>
</div>
@endif
@endsection
