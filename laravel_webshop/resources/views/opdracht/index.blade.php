@extends('layouts.template')

@section('title')
Home
@endsection

@section('content')

	@foreach($products->chunk(4) as $productChunk)
		<div class="card-deck row justify-content-center mt-3">
			@foreach($productChunk as $product)
				<div class="card col-md-3 col-6">
					<div class="bg-image" style="background-image: url({{ $product->image_path }});"></div>
					<div class="card-body">
						<h5 class="card-title">{{ $product->title }}</h5>
						<p class="card-text">{{ $product->description }}</p>
					</div>
					<div class="card-footer">
						<div class="justify-content-between">
							<span class="alert alert-info float-left">€{{ $product->price }},-</span>
							<a href="#" class="btn btn-success float-right"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	@endforeach

@endsection