<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::latest('created_at')->get();
        return view('admin.pages.transaction.index', compact('transactions'));
    }

    //show
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('admin.pages.transaction.show', compact('transaction'));
    }
}