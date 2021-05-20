
@extends('layouts.app')

@section('content')

    <div class="container">
            <h1>User Manager</h1>
            <!-- user search -->
            <div class="card my-4">
                <form class="card-body" action="/usersearch" method="GET" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for a username or id" name="query">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                    <!-- TODO add the 'order by' select option -->
                </form>
            </div>
            @if(count($users)>0)
            <!-- list of all users or search results -->
            @foreach ($users as $user)
            <br>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h3><a href="/users/{{ $user->id }}">{{ $user->name }}</a></h3>
                        <small>Joined at {{$user->created_at}} with id {{ $user->id }}</small>
                    </li>
                </ul>
            </div>
            @endforeach
        @else

        @endif
    </div>

@endsection
