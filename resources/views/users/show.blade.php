@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="/users" class="btn btn-default btn-danger">Back</a>
        <br><br>
        <h1>{{ $user->name }}</h1>
        <p>{{ $user->email }}</p>
        <hr>
        <small>Joined at {{$user->created_at}} with id {{ $user->id }}</small>
    </div>

@endsection
