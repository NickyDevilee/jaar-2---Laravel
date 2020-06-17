<?php

namespace App\Http\Controllers;

use App\Cart;
use App\products;
use Illuminate\Http\Request;

class products_controller extends Controller
{
    public function getProducts() {
    	$products = products::all();
    	return view('opdracht.index', ['products' => $products]);
    }

    public function getProduct($id) {
    	$product = products::find($id);
    	return view('opdracht.product', ['product' => $product]);
    }

    public function getCart(Request $request) {
        if (!$request->session()->has('cart')) {
            return view('opdracht.cart');
        }
        $oldCart = $request->session()->get('cart');
        $cart = new Cart($oldCart);
        return view('opdracht.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getAddToCart(Request $request, $id) {
        $product = products::find($id);
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('products.index');
    }
}
