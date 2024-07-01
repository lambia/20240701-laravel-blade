<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    @include('partials.header')

    <div class="content-wrapper">

        <h1>Lista fumetti</h1>

        <div class="cardContainer">
            @foreach ($fumetti as $fumetto)
                <div class="card">
                    <img src="{{ $fumetto['thumb'] }}" alt="{{ $fumetto['title'] }}" />
                    <h2>{{ $fumetto['title'] }}</h2>
                    <p>{{ $fumetto['description'] }}</p>
                </div>
            @endforeach
        </div>

    </div>

    @include('partials.footer')

</body>

</html>
