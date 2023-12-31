<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $categories = CategoryProduct::all();
        $products = Product::paginate(6);
        $products->getCollection()->transform(function ($product) {
            $photos = explode(',', $product->photo);
            $product->photo = $photos[0];
            return $product;
        });
        return view('user.home', compact('products', 'categories'));
    }
}
