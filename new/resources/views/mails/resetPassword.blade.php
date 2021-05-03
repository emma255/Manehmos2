@component('mail::message')
# Kindly, receive your new password for {{config('app.name')}}

   - Password: {{$password}}

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
