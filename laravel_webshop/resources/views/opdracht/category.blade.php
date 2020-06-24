@extends('layouts.template')

@section('title')
	{{ $category->category_name }}
@endsection

@section('content')
	<div class="text-center">
		<h1>{{ $category->category_name }}</h1>
	</div>

	<div class="card-deck row justify-content-center mt-3">
		@foreach($products as $product)
			<div class="card col-md-3 col-6">
				<div class="bg-image" style="background-image: url({{ $product->image_path }});"></div>
				<div class="card-body">
					<a href="/product/{{ $product->id }}"><h5 class="card-title text-center">{{ $product->title }}</h5></a>
					<p class="card-text">{{ $product->description }}</p>
				</div>
				<div class="card-footer">
					<div class="justify-content-between">
						<span class="alert alert-info float-left">€{{ $product->price }},-</span>
						<a href="{{ route('opdracht.addToCart', ['id' => $product->id]) }}" class="btn btn-success float-right"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		@endforeach
	</div>

@endsection