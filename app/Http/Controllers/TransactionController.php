<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function TransactionPage()
    {
        return view('components.transaction.transactions');
    }

    public function AddTransactionPage()
    {
        $products = Product::all();
        return view('components.transaction.add_transaction', compact('products'));
    }
}
