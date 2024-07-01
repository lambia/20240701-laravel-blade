@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>Hello Laravel World!</h1>
    <h2>{{ $author }}</h2>

    <p>Ringraziamenti speciali:</p>
    <ul>
        @foreach ($persone as $persona)
            <li><a href="{{ $persona['link'] }}">{{ $persona['text'] }}</a></li>
        @endforeach
    </ul>
@endsection
