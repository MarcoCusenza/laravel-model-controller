@extends('layouts.base')

@section('pageTitle')
    Home
@endsection

@section('pageContent')
    <div class="mainHome">
        <div class="container">
            <ul class="containerCard">
                @foreach ($allMovies as $movie)
                    <li>
                        <div class="text">
                            <div class="title">
                                {{ $movie['title'] }}
                            </div>
                            @if ($movie['title'] != $movie['original_title'])
                                <div class="original_title">
                                    {{ $movie['original_title'] }}
                                </div>
                            @endif
                        </div>
                        <div class="vote">
                            Vote: {{ $movie['vote'] }}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
