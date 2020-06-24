<?php

namespace App\Http\Controllers;

use App\Cart;
use App\products;
use App\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class products_controller extends Controller
{
    public function getProducts() {
    	$products = products::all();
        $categories = categories::all();
    	return view('opdracht.index', ['products' => $products, 'categories' => $categories]);
    }

    public function getProduct($id) {
    	$product = products::find($id);
        $categories = categories::all();

    	return view('opdracht.product', ['product' => $product, 'categories' => $categories]);
    }

    public function getProductsFromCatId($catId) {
        $category = categories::find($catId);
        $products = DB::select('select * from products where category_id = ?', [$catId]);
        $categories = categories::all();

        return view('opdracht.category', ['products' => $products, 'category' => $category, 'categories' => $categories]);
    }

    public function getCart(Request $request) {
        $categories = categories::all();
        if (!$request->session()->has('cart')) {
            return view('opdracht.cart', ['categories' => $categories]);
        }
        $oldCart = $request->session()->get('cart');
        $cart = new Cart($oldCart);
        return view('opdracht.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'categories' => $categories]);
    }

    public function getAddToCart(Request $request, $id) {
        $product = products::find($id);
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('products.index');
    }

    public function getReduce(Request $request, $id){
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceOne($id);

        if(count($cart->items) > 0){
            $request->session()->put('cart', $cart);
        }else{
            $request->session()->forget('cart');
        }
        return redirect()->route('opdracht.cart');
    }

    public function getEmpty(Request $request, $id){
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->empty($id);

        if(count($cart->items) > 0){
            $request->session()->put('cart', $cart);
        }else{
            $request->session()->forget('cart');
        }

        return redirect()->route('opdracht.cart');
    }
}
