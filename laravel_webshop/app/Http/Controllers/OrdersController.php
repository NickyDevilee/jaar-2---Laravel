<?php

namespace App\Http\Controllers;

use App\products;
use App\categories;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function getProducts() {
    	$products = products::all();
        $categories = categories::all();
    	return view('opdracht.index', ['products' => $products, 'categories' => $categories]);
    }
}
