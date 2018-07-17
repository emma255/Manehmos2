@component('mail::message')
# Kindly, register me into {{config('app.name')}}

   - Full name: {{$request->name}}
   - Worker ID: {{$request->worker_id}}
   - Position: {{$request->position}}
   - Phone no: {{$request->phone_no}}
   - Email: {{$request->email}}
   - Center name: {{$request->center}}
   - District: {{$request->district}}
   - Password: {{$request->password}}

@component('mail::button', ['url' => 'http://127.0.0.1:8000/register'])
Register this user
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
