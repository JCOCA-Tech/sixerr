@extends('layouts.app')

@section('content')

    <div class="container">
        @include('inc.messages')
        <h1>Posts</h1>
        <!-- user search -->
        <div class="card my-4">
            <form class="card-body" action="/postsearch" method="GET" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for a topic or username" name="query">
                    <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Search</button>
            </span>
                </div>
                <!-- TODO add the 'order by' select option -->
            </form>
        </div>
        <!-- Write post options -->
        @guest
            <a href="/login" class="btn btn-default btn-primary">Log in to write a post</a>
            <br>
        @else
            <a href="/posts/create" class="btn btn-default btn-primary">Write a post</a>
            <br>
        @endguest
        <!-- list of all posts or search results -->
        @if(count($posts)>0)
            @foreach ($posts as $post)
            <br>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                        <small>Written by @if($post->user->name==Auth::user()->name)You at @else{{$post->user->name}} at @endif{{ $post->created_at }}</small>
                        @can('delete', $post)
                            <!-- TODO show post delete button -->
                            <form  action="/posts/{{ $post->id }}" method="DELETE">
                                <br>
                                <button type="submit" class="btn btn-danger">Delete</button>
                                @can('update', $post)
                                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-success">Edit</a>
                                @endcan
                            </form>
                        @endcan
                    </li>
                </ul>
            </div>
            @endforeach
        @else
        <div class="card my-4">
            <form class="card-body" action="/posts" method="GET">
                <a class="btn btn-default btn-danger">You're the first! Want to tell the others about it?</a>
                <!-- Add create function for posts -->
            </form>
        @endif
    </div>

@endsection
