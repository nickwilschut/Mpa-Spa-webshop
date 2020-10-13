@extends('layouts.app')
@section('content')

<div class="jumbotron text-center">
	<h1>
		Tasks
	</h1>
</div>
<!-- <p>{{$MainModel}}</p> -->


@foreach($MainModel as $task)
	<div class="card mb-1">
      <div class="card-body">
        <h3 class="card-title"><a href="/tasks/{{$task->id}}" class="text-success">{{$task->name}}</a></h3>
        <p class="card-text">Written on {{$task->created_at}}</p>
      </div>
    </div>
@endforeach


@endsection