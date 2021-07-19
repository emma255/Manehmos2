@extends('layouts.auth')

@section('content')
<div class="card-header pb-0 text-left bg-transparent">
    <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
    <p class="mb-0">Enter your email and password to sign in</p>
</div>
<div class="card-body">
    <form role="form text-left" method="POST" action="{{ route('login') }}">
        @csrf
        <label>Email</label>
        <div class="mb-3">
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder=" Email" aria-label="Email" aria-describedby="email-addon" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <label>Password</label>
        <div class="mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" id="password" aria-label="Password" aria-describedby="password-addon" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <div class="text-center">
            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
        </div>
    </form>
</div>
<div class="card-footer text-center pt-0 px-sm-4 px-1">
    <p class="mb-0 mx-auto">
        Forgot password?
        <a href="{{ route('password.request') }}" class="text-info text-gradient font-weight-bold">Reset it</a>
    </p>
</div>
@endsection
