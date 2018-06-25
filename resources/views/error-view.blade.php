<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manehmos | Error</title>
    <style>
        html,
        body {
            height: 100%;
            background-color: gainsboro;
        }

        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
            font-size: 40px
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="panel-warning">
            {{$error_txt}}
        </div>

    </div>
</body>

</html>