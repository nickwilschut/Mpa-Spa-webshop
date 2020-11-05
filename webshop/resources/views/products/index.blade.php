@extends('layouts.app')
@section('content')
<div class="col-12">
	<div class="row">
		<div class="col-3 bg-white border rounded">
			<p>test</p>
		</div>
		<div class="col-9">
			<div class="jumbotron text-center">
				<h1>
					Products
				</h1>
			</div>
			<div class="row">
				@foreach($products as $product)
				    <div class="col-12 mb-3">
					    <div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-2">
										<img class="bg-light" style="max-width: 100px" src="/images/{{$product->image}}">
									</div>
									<div class="col-7">
										<h5 class="card-title">{{$product->name}}</h5>
								    	<p class="card-text">{{$product->description}}</p>
									</div>
								    <div class="col-3 bg-light border rounded">
								    	<div class="row mb-1 p-2">
											<h2 class="card-text">€ {{$product->price}}</h2>
										</div>
								    	<div class="row p-2 float-right">
										    <a href="/products/{{$product->id}}" class="btn btn-secondary mr-1">View</a>
										    <a href="/products/{{$product->id}}" class="btn btn-success">Add to cart</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>



@endsection