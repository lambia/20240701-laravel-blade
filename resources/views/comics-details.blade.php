@extends('layouts.app')

@section('title', 'Dettagli fumetto')

@section('content')
    <div class="dettaglio-fumetto">
        <img class="preview" src="{{ $fumetto['thumb'] }}" alt="{{ $fumetto['title'] }}" />
        <div class="details">
            <h1>{{ $fumetto['title'] }}</h1>
            <p>{{ $fumetto['description'] }}</p>
        </div>
    </div>
@endsection
