<?php

namespace App\Http\Controllers;

use App\Models\AHTransactions;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{

    public function show(AHTransactions $AHTransactions)
    {
        return view('dashboard.mall.transaction.index', [
            'AHTransactions' => $AHTransactions->where('login_id', auth()->user()->login_id)->orderBy('date', 'DESC')->paginate(7)
        ]);
    }
}
