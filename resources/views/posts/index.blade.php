@extends('layouts.app')

@section('content')

    <div class="container">
        @if(count($posts)>1)
        <h1>Posts</h1>
        @foreach ($posts as $post)
        <br>
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <small>Written by {{$post->user_id}} at {{ $post->created_at }}</small>
                </li>
            </ul>
        </div>
        @endforeach
        @else
            <a href="/posts/create" class="btn btn-default btn-danger">You're the first! Want to tell the others about it?</a>
        @endif
    </div>

@endsection
