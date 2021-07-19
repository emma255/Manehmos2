@extends('layouts.auth')

@section('content')

<div class="card-header pb-0 text-left bg-transparent">
    <h3 class="font-weight-bolder text-info text-gradient">E-mail verification</h3>
    <p class="mb-0">Please verify your email first.</p>
</div>

<div class="card-body">
    @if (!session('resent'))
    <div class="alert alert-success" role="alert">
        {{ __('A fresh verification link has been sent to your email address.') }}
    </div>
    @endif

    {{ __('Before proceeding, please check your email for a verification link.') }}
    {{ __('If you did not receive the email') }},
    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.

    </form>
</div>
@endsection
