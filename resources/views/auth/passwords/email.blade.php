@extends('layouts.auth')

@section('content')
<div class="card-header pb-0 text-left bg-transparent">
    <h3 class="font-weight-bolder text-info text-gradient">Reset password</h3>
    <p class="mb-0">Enter your email used during sign up</p>
</div>
<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <label>Email</label>
        <div class="mb-0">
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder=" Email" aria-label="Email" aria-describedby="email-addon" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="text-center">
            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Send Password Reset Link</button>
        </div>
    </form>
</div>
<div class="card-footer text-center pt-0 px-sm-4 px-1">
    <p class="mb-0 mx-auto">
        <a href="{{ route('login') }}" class="text-info text-gradient font-weight-bold">Back to login</a>
    </p>
</div>
@endsection
