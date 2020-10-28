@extends('layouts.app')
@section('content')

<div class="jumbotron text-center">
	<h1>
		{{$MainModel->name}}
	</h1>
	<p>
		Written at: {{$MainModel->created_at}}
	</p>
	<a class="btn btn-secondary btn-lg float-left" href="/tasks" role="button">Back</a>
</div>
<!-- <p>{{$MainModel}}</p> -->


@endsection