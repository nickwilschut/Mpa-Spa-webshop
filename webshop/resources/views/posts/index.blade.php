@extends('layouts.app')
@section('content')

<h1>Posts</h1>
@if(count($MainModel) > 1)
	@foreach($MainModel as $post)
		<div class="well">
			<h3>{{$post->title}}</h3>
		</div>
	@endforeach
@else
<p>No Posts</p>
@endif

@endsection