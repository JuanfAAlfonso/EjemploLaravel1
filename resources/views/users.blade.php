<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de usuarios</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <ul>
        @unless(empty($users))
            @foreach ($users as $user)
                <li>{{ $user }}</li>
            @endforeach
        @else
            <p>No hay usuarios registrados</p>
        @endunless
    </ul>
</body>
</html>
