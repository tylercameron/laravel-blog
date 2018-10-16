@extends('layouts.app')

@section('content')
    
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        
        <div class="col-md-12 px-0">
            <h1 class="display-4 font-italic">{{ $post->title }}</h1>
            <p class="lead my-3">{{ $post->body }}</p>
                        
            <a class="btn btn-outline-secondary" href="/posts">See More Posts</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <ul class="list-group">

                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        {{ $comment->body }} &nbsp;
                        by <strong>{{ $comment->user->name }} -
                        {{ $comment->created_at->diffForHumans() }}</strong>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>

    <hr>

    <div class="card">
        <div class="card-block">
            <form action="/posts/{{ $post->id }}/comment" method="POST">
                @csrf

                <div class="form-group">
                    <textarea name="body" placeholder="Comment..." class="form-control"></textarea>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>

            </form>

            @include('partials.errors')
        </div>
    </div>

@endsection