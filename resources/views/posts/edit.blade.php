@extends('layouts.app')

@section('content')
    <div class="container">
        @include('inc.messages')
        <h1>Write a Post</h1>
        @guest
            <a href="/login" class="btn btn-default btn-danger">Please log in first</a>
        @else
            <form action="/posts/{{ $post->title }}" method="POST" >
                {{csrf_field()}}
                <div class="form-group">
                    <label for="InputTitle">Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="{{ $post->title }}" value="{{ $post->title }}" name="title">
                    <small id="titleHelp" class="form-text text-muted">Choose an interesting title for your post.</small>
                </div>
                <div class="form-group">
                    <label for="InputContent">Content</label>
                    <textarea type="text" class="form-control" id="body" aria-describedby="contentHelp" placeholder="{{ $post->body }}" rows="11" name="body">{{ $post->body }}</textarea>
                    <small id="contentHelp" class="form-text text-muted">Tell us what you want to tell us.</small>
                </div>
                <input type="hidden" name="_method" value="PUT">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="/posts" class="btn btn-default btn-danger">Cancel</a>
            </form>
        @endguest
    </div>

@endsection
