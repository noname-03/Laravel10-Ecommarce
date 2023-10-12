<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function show($id)
    {
        // Fetch the category by ID
        $category = CategoryProduct::findOrFail($id);

        // Fetch all categories
        $categories = CategoryProduct::all();

        // Fetch the first 3 products
        $products = Product::take(3)->get();

        // Transform product data
        $products->transform(function ($product) {
            $photos = explode(',', $product->photo);
            $product->photo = $photos[0];
            return $product;
        });

        // Load products for the specific category
        $category->load('products');

        // Pass data to the view
        return view('user.pages.product.productCategory', compact('categories', 'category', 'products'));
    }

}