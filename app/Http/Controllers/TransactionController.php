<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function TransactionPage()
    {
        return view('components.transaction.transactions');
    }

    public function AddTransactionPage()
    {
        return view('components.transaction.add_transaction');
    }
}
