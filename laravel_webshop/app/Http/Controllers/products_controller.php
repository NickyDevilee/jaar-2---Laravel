<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class products_controller extends Controller
{
    public function getProducts() {
    	$products = products::all();
    	return view('opdracht.index', ['products' => $products]);
    }
}
