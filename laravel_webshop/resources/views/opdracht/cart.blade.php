@extends('layouts.template')

@section('title')
Shopping Cart
@endsection

@section('content')

    @if(Session::has('cart'))
        <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                <!-- Shopping cart table -->
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
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Remove</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <th scope="row" class="border-0">
                                        <div class="p-2">
                                            <img src="{{ $product['item']['image_path'] }}" alt="" width="70" class="img-fluid rounded shadow-sm" />
                                            <div class="ml-3 d-inline-block align-middle">
                                                <h5 class="mb-0">{{ $product['item']['title'] }}</h5>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="border-0 align-middle"><strong>€{{ $product['price'] }},-</strong></td>
                                    <td class="border-0 align-middle"><strong>{{ $product['qty'] }}</strong></td>
                                    <td class="border-0 align-middle">
                                        <a href="{{ route('products.empty', ['id'  => $product['item']['id']]) }}" class="text-white btn btn-dark"><i class="fa fa-trash"></i></a>
                                        <a href="{{ route('products.reduceOne', ['id'  => $product['item']['id']]) }}" class="text-white btn btn-dark"><i class="fa fa-minus"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- End -->

                <div class="p-4">
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex justify-content-between py-3 border-bottom">
                            <strong class="text-muted">Total</strong>
                            <h5 class="font-weight-bold">€{{$totalPrice}},-</h5>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
                </div>

            </div>
        </div>
        @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in cart</h2>
            </div>
        </div>
    @endif
@endsection