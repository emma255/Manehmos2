@extends('layouts.auth')

@section('content')

<div class="card-header pb-0 text-left bg-transparent">
    <h3 class="font-weight-bolder text-info text-gradient">Welcome</h3>
    <p class="mb-0">Enter your name, email, and password to sign in</p>
</div>

<div class="card-body">
    <form role="form text-left" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-2">
            <label>Name</label>
            <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" aria-label="name" aria-describedby="name-addon" value="{{ old('name') }}" required autocomplete="name">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-2">
            <label>E-mail address</label>
            <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" aria-label="email" aria-describedby="email-addon" value="{{ old('email') }}" required autocomplete="email">
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
        {{-- <div class="form-check form-check-info text-left">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
            <label class="form-check-label" for="flexCheckDefault">
                I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
            </label>
        </div> --}}
        <div class="text-center">
            <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0">Sign up</button>
        </div>
    </form>
</div>
<div class="card-footer text-center pt-0 px-sm-4 px-1">
    <p class="mb-4 mx-auto">
        Already have an account?
        <a href="{{ route('login') }}" class="text-primary text-gradient font-weight-bold">Sign in</a>
    </p>
</div>
@endsection
