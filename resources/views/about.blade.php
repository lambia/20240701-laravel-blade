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
        <h1>Hello Laravel World!</h1>
        <h2>{{ $author }}</h2>

        <p>Ringraziamenti speciali:</p>
        <ul>
            @foreach ($persone as $persona)
                <li><a href="{{ $persona['link'] }}">{{ $persona['text'] }}</a></li>
            @endforeach
        </ul>
    </div>

    @include('partials.footer')

</body>

</html>
