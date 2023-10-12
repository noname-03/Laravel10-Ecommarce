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
    // public function tes()
    // {
    //     $transaction = Transaction::all();
    //     // dd($transaction);
    //     foreach ($transaction as $data) {
    //         echo $data->id;
    //         echo $data->user->name;
    //     }
    //     ;
    //     // return view('eshop.index', compact('products', 'categories'));
    // }
    public function show($id)
    {
        $category_id = CategoryProduct::findOrFail($id);
        $categories = CategoryProduct::all();
        $products = Product::all()->take(3);
        $category_id->load('products');
        $product_categories = $category_id;
        return view('user.pages.productCategory', compact('categories', 'product_categories', 'products'));
    }
    public function productshow($id)
    {
        $id = Product::findOrFail($id);
        $id->photo = explode(',', $id->photo);
        // dd($id);
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