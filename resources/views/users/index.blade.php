
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
                <h3><a href="/posts/{{ $user->id }}">{{ $user->title }}</a></h3>
                <small>Written at {{ $user->created_at }} by {{ $user->user_id }}</small>
            </li>
        @endforeach
        </ul>
    </div>
    @else

    @endif
</div>

@endsection
