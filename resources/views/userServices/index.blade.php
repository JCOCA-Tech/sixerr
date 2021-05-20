@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Marketplace</h1>
            <!-- user search -->
            <div class="card my-4">
                <form class="card-body" action="/usersearch" method="GET" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for a service" name="query">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                    <!-- TODO add the 'order by' select option -->
                </form>
            </div>
            <!-- list of all user services or search results -->
            @if(count($userServices)>1)
            <div class="card">
                <ul class="list-group list-group-flush">
                @foreach ($userServices as $userService)
                    <li class="list-group-item">
                        <h3><a href="/posts/{{ $userService->id }}">{{ $userService->title }}</a></h3>
                        <small>Since {{ $userService->created_at }}</small>
                    </li>
                @endforeach
                </ul>
            </div>
            @else

            @endif
    </div>

@endsection
