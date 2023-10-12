<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function show($id)
    {
        $id = Product::findOrFail($id);
        $id->photo = explode(',', $id->photo);
        $categories = CategoryProduct::all();
        $products = Product::paginate(6);
        $products->getCollection()->transform(function ($product) {
            $photos = explode(',', $product->photo);
            $product->photo = $photos[0];
            return $product;
        });
        return view('user.pages.item', compact('id', 'categories', 'products'));
    }
}