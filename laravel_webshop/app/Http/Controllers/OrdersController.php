<?php

namespace App\Http\Controllers;

use App\categories;
use Illuminate\Http\Request;

use Auth;

class OrdersController extends Controller
{
	public function getOrders()
	{
		$categories = categories::all();
		$orders = Auth::user()->orders;
		$orders->transform(function($order, $key){
			$order->products = unserialize($order->products);
			return $order;
		});
		return view('opdracht.orders', ['orders'=> $orders, 'categories' => $categories]);
	}
}
