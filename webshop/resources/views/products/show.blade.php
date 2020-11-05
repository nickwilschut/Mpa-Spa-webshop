@extends('layouts.app')
@section('content')

<div class="jumbotron text-center">
	<h1>
		{{$products->name}}
	</h1>
	<p>
		Written at: {{$products->created_at}}
	</p>
	<a class="btn btn-secondary btn-lg float-left" href="/tasks" role="button">Back</a>
</div>


@endsection