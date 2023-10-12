<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $categories = CategoryProduct::all();
        $carts = Auth::user()->carts;
        return view('user.pages.cart.index', compact('carts', 'categories'));
    }

    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        // dd($request->all());
        Cart::create($request->all());

        return redirect()->route('user.cart.index');
    }

    public function update(Request $request, Cart $cart)
    {
        $request['user_id'] = Auth::user()->id;
        $cart->update($request->all());

        return redirect()->route('user.cart.index');
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('user.cart.index');
    }
}