@extends('layouts.app')
@section('content')

<div class="jumbotron text-center">
	<h1>
		Your shoppingcart
	</h1>
</div>


@foreach($carts as $cart)
	<div class="card mb-1">
      <div class="card-body">
        <h3 class="card-title text-success">{{$cart->name}}</h3>
        <p class="card-text">Written on {{$cart->created_at}}</p>
      </div>
    </div>
@endforeach


@endsection