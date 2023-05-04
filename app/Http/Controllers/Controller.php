<?php

namespace App\Http\Controllers;
use App\Models\Transaction;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showTransactions()
    {
    // ambil data transaksi dari database untuk user yang login
    $transactions = Transaction::where('id', Auth::id())->get();

    // kirim data transaksi ke view transactions.blade.php
    return view('transactions', ['transactions' => $transactions]);
    }
}

