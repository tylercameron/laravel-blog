@extends('layouts.app')

@section('content')
    
    <div class="col-md-8">
        <h1>Sign In</h1>
    </div>

    <form action="/login" method="post">

        @csrf
    
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-group" type="email" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-group" type="password" name="password" id="password">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Sign In</button>
        </div>
    </form>

    @include('partials.errors')

@endsection