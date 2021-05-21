@extends('layouts.app')

@section('content')

    <div class="container">
        @guest
            <a href="/login" class="btn btn-default btn-danger">Please log in first</a>
        @else
            <a href="/userServices" class="btn btn-default btn-danger">Back</a>
            <br><br>
            <h1>{{ $userService->name }}</h1>
            <p>{{ $userService->email }}</p>
            <hr>
            <small>Joined at {{$userService->created_at}} with id {{ $userService->id }}</small>
        @endguest
    </div>

@endsection
