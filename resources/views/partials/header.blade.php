<header>

    {{-- Questo è un commento blade, non si vedrà in browser --}}

    <!-- I commenti HTML sono visibili in pagina -->

    <div id="logo-wrapper">
        <img id="logo-img" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" />
        <span id="logo-text">Laravel Scaffold</span>
        {{-- Bonus: controllare come usare Route::currentRouteName() per aggiungere una classe ai link --}}
        <span>Attualmente sei in: {{ Route::currentRouteName() }}</span>
    </div>

    <nav>
        {{-- I link usano i NOMI delle rotte --}}
        <a href="{{ route("home") }}">HOME</a>
        <a href="{{ route("about") }}">ABOUT</a>
        <a href="{{ route("comics-list") }}">FUMETTI</a>
    </nav>
    
</header>