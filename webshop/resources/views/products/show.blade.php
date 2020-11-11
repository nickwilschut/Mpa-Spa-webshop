@extends('layouts.app')
@section('content')
<div class="jumbotron">
	<div class="col-12">
		<div class="row">
			<div class="col-5">
				<img class="bg-light" style="max-width: 400px" src="/images/{{$products->image}}">
			</div>
			<div class="col-3">
				<div class="row text-success">
					<h1>
						{{$products->name}}
					</h1>
				</div>
				<div class="row">
					<p>
						{{$products->description}}
					</p>
				</div>
			</div>
			<!-- <a class="btn btn-secondary btn-lg float-left" href="/products" role="button">Back</a> -->
			<div class="col-4 bg-light border rounded">
		    	<div class="row mb-1 p-2">
					<h2 class="card-text">€ {{$products->price}}</h2>
				</div>
		    	<div class="row p-3 float-right mt-5">
				    <a href="/products" class="btn btn-secondary mr-1 mt-3">Back</a>
				    <a href="/products/{{$products->id}}" class="btn btn-success mt-3">Add to cart</a>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection