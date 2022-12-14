<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolean</title>
</head>

<body>
    <h2>{{ $teamTitle }}</h2>
    <p>{{ $description }}</p>

    <ul>
        <h4>Ecco chi sono:</h4>
        @foreach ($tutors as $tutor)
            <li>{{ $tutor }}</li>
        @endforeach
    </ul>
    <a href="{{ route('home') }}">Torna alla home</a>
</body>

</html>
