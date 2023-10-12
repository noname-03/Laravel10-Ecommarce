<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        // $categories = CategoryProduct::all();
        // $products = Product::paginate(6);
        // return view('user.home', compact('products', 'categories'));
    }
}