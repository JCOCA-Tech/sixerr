@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="/posts" class="btn btn-default">Back</a>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <hr>
        <small>Written on {{ $post->created_at }}</small>
    </div>

@endsection
