@extends('layouts.app')

@section('content')

    <div class="container">
        @guest
            <a href="/login" class="btn btn-default btn-danger">Please log in first</a>
        @else
            <a href="/posts" class="btn btn-default btn-danger">Back</a>
            <br><br>
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
            <hr>
            <small>Written by {{$post->user_id}} at {{ $post->created_at }}</small>
        @endguest
    </div>

@endsection
