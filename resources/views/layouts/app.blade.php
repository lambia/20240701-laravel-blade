<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', "Laravel Template")</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>

    @include('partials.header')

    <div class="content-wrapper">
        @yield('content', "Questa pagina non ha nessun contenuto")
    </div>

    @include('partials.footer')

</body>

</html>
