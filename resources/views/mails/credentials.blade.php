@component('mail::message')

# Karibu {{$request->name}},



- Username yako ni {{$request->email}}

- password ni {{$request->password}}

@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])

Login to Manehmos

@endcomponent

Thanks,

<br> {{ config('app.name') }} @endcomponent
