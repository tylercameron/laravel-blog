@extends('layouts.app')

@section('content')
    
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        
        <div class="col-md-12 px-0">
            <h1 class="display-4 font-italic">{{ $post->title }}</h1>
            <p class="lead my-3">{{ $post->body }}</p>
                        
            <a class="btn btn-outline-secondary" href="/posts">See More Posts</a>
        </div>
    </div>

@endsection