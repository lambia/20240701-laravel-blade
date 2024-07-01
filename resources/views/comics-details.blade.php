@extends('layouts.app')

@section('title', 'Dettagli fumetto')

@section('content')
    <div class="card">
        <img src="{{ $fumetto['thumb'] }}" alt="{{ $fumetto['title'] }}" />
        <h1>{{ $fumetto['title'] }}</h1>
        <p>{{ $fumetto['description'] }}</p>
    </div>
@endsection
