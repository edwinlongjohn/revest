<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userDashboard(){
        $wallets = Auth::user()->wallet;

 /*   dd($wallets);
 */
        return view('dashboard', compact('wallets'));


    }
}


