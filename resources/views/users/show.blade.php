@extends('layouts.app')

@section('content')

    <div class="container">
        @guest
            <a href="/login" class="btn btn-default btn-danger">Please log in first</a>
        @else
            <a href="/users" class="btn btn-default btn-danger">Back</a>
            <br><br>
            <h1>{{ $user->name }}</h1>
            <p>{{ $user->email }}</p>
            <hr>
            <small>Joined at {{$user->created_at}} with id {{ $user->id }}</small>
            @can('delete', $user)
                <!-- TODO show post delete button -->
                <form  action="/postsearch" method="DELETE">
                    <br>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            @endcan
        @endguest
    </div>

@endsection
