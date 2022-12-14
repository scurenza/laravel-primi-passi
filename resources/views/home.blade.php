<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolean</title>

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        a:hover {
            border-bottom: 1px solid blue;
        }
    </style>
</head>

<body>
    <h1 class="p-3 text-center">{{ $homeTitle }}</h1>

    <ul class="nav justify-content-center bg-light ">
        <li class="nav-item mx-3">
            <a class="nav-link" href="{{ route('team') }}">Team</a>
        </li>
        <li class="nav-item mx-3">
            <a class="nav-link" href="{{ route('teacher') }}">Teacher</a>
        </li>
        <li class="nav-item mx-3">
            <a class="nav-link" href="{{ route('supervisor') }}">Supervisor</a>
        </li>
    </ul>
</body>

</html>
