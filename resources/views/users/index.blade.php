
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Manager</h1>

    <!-- TODO user search by id -->

    <!-- TODO user search by name -->

    @if(count($users)>1)
    <div class="card">
        <ul class="list-group list-group-flush">
        @foreach ($users as $user)
            <li class="list-group-item">
                <h3><a href="/users/{{ $user->id }}">{{ $user->name }}</a></h3>
                <small>Joined Sixerr at {{ $user->created_at }} with id {{ $user->id }}</small>
            </li>
        @endforeach
        </ul>
    </div>
    @else

    @endif
</div>

@endsection
