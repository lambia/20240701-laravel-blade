@extends('layouts.app')

@section('title', 'Lista Fumetti')

@section('content')
    <h1>Lista fumetti</h1>

    <div class="cardContainer">
        @foreach ($fumetti as $indice => $fumetto)
            <div class="card">
                <img src="{{ $fumetto['thumb'] }}" alt="{{ $fumetto['title'] }}" />
                <a href="/comics/{{ $indice }}">
                    <h2>{{ $fumetto['title'] }}</h2>
                </a>
            </div>
        @endforeach
    </div>
@endsection
