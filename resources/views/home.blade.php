@extends('layouts.app')

@section("title", "Benvenuto in Home")

@section("content")
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
@endsection
