@extends('layouts.app')

@section('content')

    <div class="container">
        @guest
            <a href="/login" class="btn btn-default btn-danger">Please log in first</a>
        @else
            <a href="/userServices" class="btn btn-default btn-danger">Back</a>
            <form>
                <div class="form-group">
                    <label for="InputTitle">Title</label>
                    <input type="text" class="form-control" id="InputTitle" aria-describedby="titleHelp" placeholder="Enter Title">
                    <small id="titleHelp" class="form-text text-muted">Choose an interesting title for your post.</small>
                </div>
                <div class="form-group">
                    <label for="InputContent">Content</label>
                    <input type="text" class="form-control" id="InputContent" aria-describedby="contentHelp" placeholder="Enter Content">
                    <small id="contentHelp" class="form-text text-muted">Tell us what you want to tell us.</small>
                </div>
                <button type="submit" class="btn btn-primary">Post</button>
            </form>
        @endguest
    </div>

@endsection
