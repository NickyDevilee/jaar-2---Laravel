@extends('layouts.template')

@section('title')
{{ $product->title }}
@endsection

@section('content')

	<div class="row">
		<div class="col-md-4">
			<img src="{{ $product->image_path }}" class="img-fluid">
		</div>
		<div class="card col-md-8 p-0 text-center">
			<div class="card-body">
				<h1 class="card-title">{{ $product->title }}</h1>
				<p class="card-text">{{ $product->description }}</p>
			</div>
			<div class="card-footer">
				<div class="justify-content-between">
					<span class="alert alert-info float-left">€{{ $product->price }},-</span>
					<a href="{{ route('opdracht.addToCart', ['id' => $product->id]) }}" class="btn btn-success float-right"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>

@endsection