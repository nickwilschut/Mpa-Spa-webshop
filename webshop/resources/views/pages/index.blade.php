@extends('layouts.app')
@section('content')

<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>lorem ipsum</p>
    <p>
    	<a class="btn btn-success btn-lg" href="/login" role="button">Login</a>
    	<a class="btn btn-light btn-lg" href="/register" role="button">Register</a>
    </p>
</div>

@endsection