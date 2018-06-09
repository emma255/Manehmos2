<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    Full name: {{$request->name}}
    <br> Worker ID: {{$request->worker_id}}
    <br> Position: {{$request->position}}
    <br> Phone no: {{$request->phone_no}}
    <br> Email: {{$request->email}}
    <br> Center name: {{$request->center}}
    <br> District: {{$request->district}}
    <br> Password: {{$request->password}}
</body>

</html>