<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function investPage()
    {
        $package = Packages::all();
        return view('investment_page', compact('package'));
    }

    public function updateUserAccount()
    {
        return view('update_user_account');
    }
}
