<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function wallet(Request $request)
    {
        $wallet = Auth::user()->wallet;
        $wallet->balance = $request->balance;
        $wallet->bonus = $request->bonus;
        $wallet->profit = $request->profit;
        $wallet->save();

      
        return back();
    }
}
