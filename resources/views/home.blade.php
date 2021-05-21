@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (Auth::user()->is_administrator==0)
                            {{ __("You're now logged in as '".Auth::user()->name."'!") }}
                        @elseif (Auth::user()->is_administrator==1)
                            {{ __("You're now logged in as '".Auth::user()->name."'. '".Auth::user()->name."' is an administrator") }}
                        @else
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
