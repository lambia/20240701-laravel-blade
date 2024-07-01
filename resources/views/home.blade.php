<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    @include('partials.header')

    <div class="content-wrapper">
        <h1>{{ $msg }}</h1>
        <h2>Benvenuto nella home page</h2>
        <p>{{ $description }}</p>

        <ul>
            @foreach ($studenti as $studente)
                <li>{{ $studente }}</li>
            @endforeach
        </ul>

        <p>Ci sono {{ count($studenti) }} studenti</p>

        @if (count($studenti) > 3)
            <p>{{ count($studenti) }} è maggiore di 3</p>
        @else
            <p>{{ count($studenti) }} NON è maggiore di 3</p>
        @endif
    </div>

    @include('partials.footer')

</body>

</html>
