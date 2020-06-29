@extends('layouts.template')

@section('title')
	Orders
@endsection

@section('content')

<div id="accordion">
	@foreach($orders as $order)
		<div class="card">
			<div class="card-header" id="heading{{$order->id}}">
				<h5 class="mb-0 text-center">
					<button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$order->id}}" aria-expanded="true" aria-controls="collapse{{$order->id}}">
						{{$order->created_at}}
					</button>
				</h5>
			</div>
			<div id="collapse{{$order->id}}" class="collapse" aria-labelledby="heading{{$order->id}}" data-parent="#accordion">
				<div class="row">
					<div class="col-md-12">
						
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th scope="col" class="border-0 bg-light">
											<div class="p-2 px-3 text-uppercase">Product</div>
										</th>
										<th scope="col" class="border-0 bg-light">
											<div class="py-2 text-uppercase">Price</div>
										</th>
										<th scope="col" class="border-0 bg-light">
											<div class="py-2 text-uppercase">Quantity</div>
										</th>
									</tr>
								</thead>
								<tbody>
									@foreach($order->products->items as $item)
										<tr>
											<th scope="row" class="border-0">
												<div class="p-2">
													<img src="{{ $item['item']['image_path'] }}" alt="" width="70" class="img-fluid rounded shadow-sm" />
													<div class="ml-3 d-inline-block align-middle">
														<h5 class="mb-0">{{ $item['item']['title'] }}</h5>
													</div>
												</div>
											</th>
											<td class="border-0 align-middle"><strong>€{{ $item['price'] }},-</strong></td>
											<td class="border-0 align-middle"><strong>{{ $item['qty'] }}</strong></td>
										</tr>
									@endforeach
								</tbody>
							</table>
							<ul>
								<li class="list-group-item"><b>Totaal:</b> <span class="float-right">€{{$order->products->totalPrice}},-</span></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
	@endforeach
</div>

@endsection