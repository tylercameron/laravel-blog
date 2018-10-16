@extends('layouts.app')

@section('content')

    @foreach ($posts as $post)        
    
        <div class="blog-post">

            <h2 class="blog-post-title">{{ $post->title }}</h2>

            <p class="blog-post-meta">
                {{ $post->user->name }} on
                {{ $post->created_at->toFormattedDateString() }}
            </p>

            <hr>

            <div class="content">
                {{ $post->body }}
            </div>
            
            <a class="btn btn-outline-primary" href="/posts/{{ $post->id }}">View Post</a>            

        </div>
        <br>
        <!-- /.blog-post -->

    @endforeach

@endsection