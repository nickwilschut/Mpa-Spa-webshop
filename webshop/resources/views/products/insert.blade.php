@extends('layouts.app')
@section('content')
<div class="col-12">
	<div class="jumbotron text-center">
		<h1>
			Products
		</h1>

		<form method="POST">
			@csrf
			<label for="name">Naam:</label>
			<div class="mb-1">
				<input type="text" id="name" name="name">
			</div>

			<label for="price">Price:</label>
			<div class="mb-1">
				<input type="text" id="price" name="price">
			</div>

			<label for="description">Description:</label>
			<div class="mb-1">
				<input type="text" id="description" name="description">
			</div>

			<label for="image">Image:</label>
			<div class="mb-3">
				<input type="text" id="image" name="image">
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>



@endsection