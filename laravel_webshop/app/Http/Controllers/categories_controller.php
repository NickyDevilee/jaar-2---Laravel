<?php

namespace App\Http\Controllers;

use App\categories;
use Illuminate\Http\Request;

class categories_controller extends Controller
{
    public function getCategories() {
    	$categories = categories::all();
    	return view('opdracht.index', ['categories' => $categories]);
    }
}
