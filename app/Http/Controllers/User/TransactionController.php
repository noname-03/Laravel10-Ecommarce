<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\DetailTransaction;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function store(Request $request)
    {

        $time = Carbon::now()->format('hms');
        $date = Carbon::now()->format('Ymd');
        $data = 'INV/' . $date . '/' . Str::random(5) . '/' . $time;
        $request['order_id'] = $data;
        $transaksi = Auth::user()->transactions()->create($request->all());

        $carts = Auth::user()->carts;
        $carts->map(function ($obj) use ($transaksi) {
            unset($obj->user_id);
            unset($obj->created_at);
            unset($obj->updated_at);
            $obj['transaksi_id'] = $transaksi->id;
            $product = Product::findOrFail($obj->product_id);
            $a = new DetailTransaction;
            $a->transaction_id = $obj->transaksi_id;
            $a->product_id = $obj->product_id;
            $a->qty = $obj->qty;
            $a->price = $product->price;
            $a->variant = $obj->unit_variant;
            $a->subtotal = $a->qty * $a->price;
            $a->save();
            return $obj;
        });

        Cart::where('user_id', '=', Auth::user()->id)->delete();
        return redirect()->route('user.transaction.show', $transaksi->id);
    }

    public function show($id)
    {
        $transaction = Auth::user()->transactions()->findOrFail($id);
        return view('user.pages.cart.invoice', compact('transaction'));
    }
}
