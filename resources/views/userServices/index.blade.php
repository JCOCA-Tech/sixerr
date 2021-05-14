@extends('layouts.app')

@section('content')
    <h1>Marketplace</h1>
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
@endsection
