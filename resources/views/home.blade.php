@extends('layouts.base')

@section('pageTitle')
    Home
@endsection

@section('pageContent')
    <div class="container">
        <h1>Home</h1>
        <ul>
            @foreach ($allMovies as $movie)
                <li>{{$movie['title']}}</li>
            @endforeach
        </ul>
    </div>
@endsection
